package servlets;

import java.io.IOException;
import static java.lang.Integer.parseInt;
import java.util.ArrayList;
import java.util.List;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;
import model.HourLog;
import model.EmployerMgr;
import model.LoginMgr;
import model.StudentMgr;
import model.User;
import model.Student;
import model.Employer;

@WebServlet(name = "ControllerServlet", urlPatterns = {"/ControllerServlet"})
public class ControllerServlet extends HttpServlet {

    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
    throws ServletException, IOException {
        //create new session
        HttpSession session = request.getSession(true);
        
        LoginMgr loginMgr = (LoginMgr) session.getAttribute("loginMgr");
        StudentMgr studentMgr = (StudentMgr) session.getAttribute("studentMgr");
        EmployerMgr employerMgr = (EmployerMgr) session.getAttribute("employerMgr");
        
        User currentUser = (User) session.getAttribute("currentUser"); 
        
        //Check for action
        switch (request.getParameter("buttonAction")) {
            case "login": {
                // Instantiate the Manager classes (at beginning of session)
                LoginMgr initLoginMgr = new LoginMgr();
                List<User> userList = (List<User>) getServletContext().getAttribute("userList");
                initLoginMgr.setUserList(userList);
                session.setAttribute("loginMgr", initLoginMgr);

                EmployerMgr initEmployerMgr = new EmployerMgr();
                List<Employer> employerList = (List<Employer>) getServletContext().getAttribute("employerList");
                initEmployerMgr.setEmployerList(employerList);
                session.setAttribute("employerMgr", initEmployerMgr);

                StudentMgr initStudentMgr = new StudentMgr();
                List<Student> studentList = (List<Student>) getServletContext().getAttribute("studentList");
                initStudentMgr.setStudentList(studentList);
                session.setAttribute("studentMgr", initStudentMgr);
                
                String nextPage = "index.jsp";
                
                User validUser = initLoginMgr.getValidUser(request.getParameter("userName"));
                if (validUser != null) {
                    session.setAttribute("currentUser", validUser);
                    
                    switch(validUser.getUserType()) {
                        case "Student": nextPage = "pageStudent.jsp"; break;
                        case "Employer": nextPage = "pageEmployer.jsp"; break;
                        case "Coordinator": nextPage = "pageCoordinator.jsp"; break;
                    }
                } else request.setAttribute("loginMessage", "Invalid Login");
                
                request.getRequestDispatcher(nextPage).forward(request, response);
                break;
            }
            case "logout": {
                // Invalidate old session (if exists)
                HttpSession oldSession = request.getSession(false);
                if (oldSession != null) oldSession.invalidate();
                
                request.getRequestDispatcher("index.jsp").forward(request, response);
                break;
            }
            case "register": {
                String userName = request.getParameter("newUserName");
                String userType = request.getParameter("newUserType");
                
                if (userType.equals("Student")) {
                    List<User> userList = (List<User>) getServletContext().getAttribute("userList");
                    List<Student> studentList = (List<Student>) getServletContext().getAttribute("studentList");
                    userList.add(new User(userName, userType));
                    studentList.add(new Student(userName));
                }
                else if (userType.equals("Employer")) {
                    loginMgr.getUserList().add(new User(userName, userType));
                    employerMgr.getEmployerList().add(new Employer(userName));
                }
                
                request.getRequestDispatcher("index.jsp").forward(request, response);
                break;
            }
            case "addHourLog": {
                Student student = studentMgr.getStudent(currentUser.getUserName());
                student.getHourLogs().add(
                    new HourLog(
                        request.getParameter("date"),
                        parseInt(request.getParameter("noHours")),
                        request.getParameter("summary")
                    )
                );
                
                request.getRequestDispatcher("pageStudent.jsp").forward(request, response);
                break;
            }
            case "submitResume": {
                studentMgr.getStudent(currentUser.getUserName()).uploadResume(request.getParameter("resume"));
                
                request.getRequestDispatcher("pageStudent.jsp").forward(request, response);
                break;
            }
            case "reviewHourLogs" : {
                String selectedStudentName = request.getParameter("selectedStudent");
                request.setAttribute("selectedStudent", studentMgr.getStudent(selectedStudentName));
                
                request.getRequestDispatcher("approveHours.jsp").forward(request, response);
                break;
            }
            case "approveHours": {
                Employer employer = employerMgr.getEmployer(currentUser.getUserName());
                Student student = studentMgr.getStudent(request.getParameter("selectedStudentName"));
                HourLog hourLog = student.getHourLog(request.getParameter("hourLogDate"));
                if (hourLog != null) {
                    hourLog.approveLog(employer);
                }
                        
                request.getRequestDispatcher("pageEmployer.jsp").forward(request, response);
                break;
            }
            case "hireStudent": {
                Student student = studentMgr.getStudent(request.getParameter("studentName"));
                Employer employer = employerMgr.getEmployer(currentUser.getUserName());
                if (student != null) {
                    employer.hireStudent(student);
                }
                
                request.getRequestDispatcher("pageEmployer.jsp").forward(request, response);
                break;
            }
            case "submitJobDescription": {
                employerMgr.getEmployer(currentUser.getUserName()).uploadJobDescription(request.getParameter("jobDescription"));
                
                request.getRequestDispatcher("pageEmployer.jsp").forward(request, response);
                break;
            }
        }
    }

    @Override
    public void init() throws ServletException {
        super.init();
        
        //Create initial set of students
        List<Student> initStudentList = new ArrayList<>();
        initStudentList.add(new Student("s1"));
        initStudentList.add(new Student("s2"));
        initStudentList.add(new Student("s3"));
        getServletContext().setAttribute("studentList", initStudentList);
        
        //Create initial set of employers
        List<Employer> initEmployerList = new ArrayList<>();
        initEmployerList.add(new Employer("emp"));
        getServletContext().setAttribute("employerList", initEmployerList);
        
        //Create initial set of users
        List<User> initUserList = new ArrayList<>();
        initUserList.add(new User("s1", "Student"));  
        initUserList.add(new User("s2", "Student"));
        initUserList.add(new User("s3", "Student"));
        initUserList.add(new User("emp", "Employer"));
        initUserList.add(new User("coord", "Coordinator"));
        getServletContext().setAttribute("userList", initUserList);
    }
    
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }
    
    @Override
    public String getServletInfo() {
        return "Short description";
    }
}

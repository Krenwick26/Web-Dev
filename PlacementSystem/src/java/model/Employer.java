package model;
import java.util.ArrayList;
import java.util.List;

public class Employer extends User {
    private String jobDescription;
    private List<Student> hiredStudents = new ArrayList<>();;

    public Employer(String pUserName) {
        super(pUserName, "Employer");
    }

    public String getJobDescription() { return jobDescription; }
    public void uploadJobDescription(String jobDescription) { this.jobDescription = jobDescription; }
    
    public List<Student> getHiredStudents() { return hiredStudents; }

    public Student getHiredStudent(String userName) {
        for (Student s : hiredStudents) {
            if (s.getUserName().equals(userName)) {
                return s;
            }
        }
        return null;
    }
    
    public void hireStudent(Student student) {
        this.hiredStudents.add(student);
    }
    
    public boolean checkIfAlreadyHired(Student student) {
        for (Student s : hiredStudents) {
            if (s.getUserName().equals(student.getUserName())) {
                return true;
            }
        }
        return false;
    }
}

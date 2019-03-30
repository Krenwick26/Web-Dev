package model;
import java.util.ArrayList;
import java.util.List;

public class StudentMgr {
    private List<Student> students = new ArrayList<>();

    public List<Student> getStudentList() { return students; }
    
    public void setStudentList(List<Student> initList) {
        students = initList; 
    }

    public Student getStudent(String userName) {
        for (Student s : students) {
            if (s.getUserName().equals(userName)) {
                return s;
            }
        }
        return null;
    }
    
    
    
}

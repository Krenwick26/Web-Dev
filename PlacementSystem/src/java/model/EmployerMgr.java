package model;
import java.util.ArrayList;
import java.util.List;

public class EmployerMgr {
    private List<Employer> employers = new ArrayList<>();

    public List<Employer> getEmployerList() { return employers; }
    public void setEmployerList(List<Employer> initList) { employers = initList; }
    
    public Employer getEmployer(String userName) {
        for (Employer e : employers) {
            if (e.getUserName().equals(userName)) {
                return e;
            }
        }
        return null;
    }
}

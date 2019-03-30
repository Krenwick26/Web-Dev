package model;
import java.util.ArrayList;
import java.util.List;

public class Student extends User  {
    private String resume;
    private List<HourLog> hourLogs = new ArrayList<>();

    public Student(String pUserName) {
        super(pUserName, "Student");
    }

    public String getResume() { return resume; }
    public void uploadResume(String resume) { this.resume = resume; }
    
    public List<HourLog> getHourLogs() { return hourLogs; }
    public HourLog getHourLog(String date) {
        for (HourLog l : hourLogs) {
            if (l.getDate().equals(date)) {
                return l;
            }
        }
        return null;
    }
    
    public double calculateTotalHours() {
        double totalHours = 0;
        for (HourLog l : hourLogs) {
            totalHours += l.getNoHours();
        }
        return totalHours; // round ?
    }
}

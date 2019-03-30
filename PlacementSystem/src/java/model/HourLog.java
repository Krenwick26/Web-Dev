package model;

public class HourLog {
    private Employer approvedBy;  //default to false, allow employer to set to true
    private String  date;         //when was the hourlog done //should this be type Date?
    private int  noHours;      //noHours for this hour log (on date)
    private String  summary;      //Summary of Activities (what the student did (textfield)

    //CONSTRUCTOR..........................................
    public HourLog (String date, int noHours, String summary) {
        this.date = date;
        this.noHours = noHours;
        this.summary = summary;
        this.approvedBy = null;
    }
    
    //METHODS..............................................
    public void approveLog(Employer employer) {
        this.approvedBy = employer;
    }
    
    //GET METHODS..........................................
    public Employer getApprovedBy() { return approvedBy; }
    public String getDate() { return date; }
    public double getNoHours() { return noHours; }
    public String getSummary() { return summary; }
}

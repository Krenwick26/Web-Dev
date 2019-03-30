package model;

public class User {
    private String userName;
    private String userType;

    public User(String pUserName, String pUserType) {
        userName = pUserName;
        userType = pUserType;
    }

    public String getUserName() { return userName; }
    public String getUserType() { return userType; }
}
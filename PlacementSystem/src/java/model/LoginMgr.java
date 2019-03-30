package model;
import java.util.List;
import java.util.ArrayList;

public class LoginMgr {
    private List<User> userList = new ArrayList<>();
    
    public List<User> getUserList() { return userList; }
    public void setUserList(List<User> initList) { userList = initList; }
    
    public User getValidUser(String userName) {
        for (User u : userList) {
            if (u.getUserName().equals(userName)) {
                return u;
            }
        }
        return null;
    }
}
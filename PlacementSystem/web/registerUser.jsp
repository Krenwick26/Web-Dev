<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Register New User</title>
        <link rel=stylesheet href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    </head>
    <body>
        <form action="ControllerServlet">
            <p>Create a new account</p>
            <label>User Name:</label>
            <input type="text" name="newUserName"><br>
            <label>User Type:</label>
            <select name="newUserType">
                <c:choose>
                    <c:when test = "${currentUser.getUserType().equals('Coordinator')}">
                        <option>Employer</option>
                    </c:when>
                    <c:otherwise>
                        <option>Student</option>
                    </c:otherwise>
                </c:choose>
                <!--<option value="Coordinator">Coordinator</option>-->
            </select><br><br>
            <button name="buttonAction" value="register">Register new user</button>
        </form>
    </body>
</html>

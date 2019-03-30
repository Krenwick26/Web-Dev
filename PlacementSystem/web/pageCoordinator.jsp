<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Coordinator Page</title>
        <link rel=stylesheet href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container mt-5">
            <%@include file="WEB-INF/Logout.jspf" %>
            <hr>
            <%@include file="WEB-INF/Header.jspf" %>
            <button class="btn btn-secondary btn-lg btn-block" onclick="location.href='registerUser.jsp';">
                Register New Employer
            </button><br>
            <hr>
            
            <%@include file="WEB-INF/viewStudents.jspf" %>
        
        </div>
    </body>
</html>

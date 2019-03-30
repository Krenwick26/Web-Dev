<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Employer Page</title>
        <link rel=stylesheet href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container mt-5">
            <%@include file="WEB-INF/Logout.jspf" %>
            <hr>
            <%@include file="WEB-INF/Header.jspf" %>
            
            <button class="btn btn-secondary btn-lg btn-block" onclick="location.href='submitJobDescription.jsp';">
                Submit Job Description
            </button><br>
            <hr>
            <button class="btn btn-secondary btn-lg btn-block" onclick="location.href='reviewResumes.jsp';">
                Review Student Resumes and Hire Students
            </button><br>
            
            <form action="ControllerServlet">
                <p class="text-info">You must hire students before you can review their hour logs</p>
                <select name="selectedStudent" required>
                    <c:forEach items="${employerMgr.getEmployer(currentUser.getUserName()).getHiredStudents()}" var="s">
                        <option value="${s.getUserName()}">${s.getUserName()}</option>
                    </c:forEach>
                </select>
                <button class="btn btn-secondary" name="buttonAction" value="reviewHourLogs">
                   Review Hours
                </button>
            </form>
            
        </div>
    </body>
</html>
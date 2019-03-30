<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Review Resumes</title>
        <link rel=stylesheet href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container mt-5">
            <br><h2>Review Resumes</h2><br>
            <hr>
            <p class="text-info">You can only hire 1 student at a time.</p>
            <form action="ControllerServlet">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>Student Name</th>
                            <th>Resume</th>
                            <th>Add Student</th>
                        </tr>
                    </thead>
                    <tbody>
                        <c:forEach items="${studentMgr.getStudentList()}" var="s">
                                <tr>
                                    <td>${s.getUserName()}</td>
                                    <td>${s.getResume()}</td>
                                    <td>
                                        <c:choose>
                                            <c:when test="${employerMgr.getEmployer(currentUser.getUserName()).checkIfAlreadyHired(s)}">
                                                <span class="text-success">Already Hired</span>
                                            </c:when>
                                            <c:otherwise>
                                                <input type="checkbox" name="studentName" value="${s.getUserName()}">Hire Student
                                            </c:otherwise>
                                        </c:choose>
                                    </td>
                                </tr>
                        </c:forEach>
                    </tbody>
                </table>
                <button name="buttonAction" value="hireStudent">Hire Student</button>
            </form>
        </div>
    </body>
</html>

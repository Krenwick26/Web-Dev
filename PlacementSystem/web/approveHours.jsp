<%@page contentType="text/html" pageEncoding="UTF-8"%>
<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Confirm Hours</title>
        <link rel=stylesheet href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container mt-5">
            
            <h2>Approve Hours for ${selectedStudent.getUserName()}</h2>
            <hr>

            <p class="text-info">You can only approve 1 hour log at a time.</p>
            <form action="ControllerServlet">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                            <th>Date</th>
                            <th>Hours</th>
                            <th>Summary of Activities</th>
                            <th>Approval Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <c:forEach items="${selectedStudent.getHourLogs()}" var="l">
                            <tr>
                                <td>${l.getDate()}</td>
                                <td>${l.getNoHours()}</td>
                                <td>${l.getSummary()}</td>
                                <td>
                                    <c:choose>
                                        <c:when test="${l.getApprovedBy() != null}">
                                            <span class="text-success">
                                               Approved by ${l.getApprovedBy().getUserName()} 
                                            </span>
                                        </c:when>
                                        <c:otherwise>
                                            <input type="checkbox" name="hourLogDate" value="${l.getDate()}">Approve
                                        </c:otherwise>
                                    </c:choose>
                                </td>
                            </tr>
                        </c:forEach>
                    </tbody>
                    <tbody>
                        <tr>
                            <th></th>
                            <th>Total Hours: ${selectedStudent.calculateTotalHours()}</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tbody>
                </table>
                <input type="hidden" name="selectedStudentName" value="${selectedStudent.getUserName()}" />
                <button name="buttonAction" value="approveHours">Submit</button>
            </form>
        </div>
    </body>
</html>

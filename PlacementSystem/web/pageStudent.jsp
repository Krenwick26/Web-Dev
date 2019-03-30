<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Student Page</title>
        <link rel=stylesheet href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container mt-5">
            <%@include file="WEB-INF/Logout.jspf" %>
            <hr>
            <%@include file="WEB-INF/Header.jspf" %>
           
            <button class="btn btn-secondary btn-lg btn-block" onclick="location.href='submitResume.jsp';">
                Submit Resume
            </button><br>
            <hr>
            <div class="container mt-5">
                <%@include file="WEB-INF/viewHoursTable.jspf" %>
                <button class="btn btn-secondary btn-lg btn-block" onclick="location.href='addHourLog.jsp';">
                    Add Hour Log
                </button><br>
            </div>
            
        </div>
    </body>
</html>

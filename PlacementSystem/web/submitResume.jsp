<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Submit Resume</title>
        <link rel=stylesheet href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container">
            <br><h2>Submit Resume for ${currentUser.getUserName()}</h2>
            <form action="ControllerServlet">
                <label>Type resume</label><br>
                <textarea rows="10" maxLength="50" name="resume">I am interested in working with java web.</textarea>
                <br><br>
                <button name="buttonAction" value="submitResume">Submit</button>
            </form>
        </div>
    </body>
</html>

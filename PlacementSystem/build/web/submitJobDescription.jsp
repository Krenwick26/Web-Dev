<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Submit Job Description</title>
        <link rel=stylesheet href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container">
            <form action="ControllerServlet">
                <br><h2>Submit Job Description for ${currentUser.getUserName()}</h2>
                <label>Type job description:</label><br>
                <textarea rows="10" name="jobDescription">Looking for a student who is interested in java web programming</textarea>
                <br><br>
                <button name="buttonAction" value="submitJobDescription">Submit</button>
            </form>
        </div>
    </body>
</html>

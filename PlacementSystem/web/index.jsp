<%@ taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login Page</title>
        <link rel=stylesheet href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container mt-50">
            
            <br><h2>Login Page</h2><br><br>
            
            <form action="ControllerServlet">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Username</label>
                    <div class="controls col-sm-5">
                        <input required type="text" class="form-control" value="s1" name="userName" placeholder="Username"/>
                        <span class="help-inline text-danger">${loginMessage}</span>
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button class="btn btn-primary" name="buttonAction" value="login">
                            Login
                        </button>
                    </div>
                </div>
            </form>
            
            <p>Not registered? <a href="http://localhost:8080/Assignment1/registerUser.jsp">Create an account</a></p>

        </div> 
    </body>
</html>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Add Hour Log</title>
        <link rel=stylesheet href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"/>
    </head>
    <body>
        <div class="container">
            
            <br><h2>Add Hour Log for ${currentUser.getUserName()}</h2><br>
            <p class="text-info">
                Note: You may only submit one hour log per day.<br>
                Ex: You can not have 2 hour logs for April 17
            </p><br>
            
            <form action="ControllerServlet">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Date</label>
                    <div class="col-sm-5">
                        <input name="date" value="September 16" 
                            class="form-control" placeholder="Date"
                            maxLength="25" required >
                    </div>
                </div> 
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Number of Hours</label>
                    <div class="col-sm-5">
                        <input name="noHours" value="8" 
                            class="form-control" placeholder="Hours"
                            type="number" max="24" min="1" required >
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Summary of Activities</label>
                    <div class="col-sm-10">
                        <input name="summary" value="worked on java project"
                            class="form-control" placeholder="Summary of Activities"
                            maxLength="50" required >
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="offset-sm-2 col-sm-10">
                        <button name="buttonAction" value="addHourLog" class="btn btn-primary">
                            Add Hour Log
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>

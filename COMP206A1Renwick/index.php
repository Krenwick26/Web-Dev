<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link
            rel="stylesheet" 
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css"
        />
        <link rel="stylesheet" type="text/css" href="CSS/index.css"/>
        <script src="JavaScript/index.js" type="text/javascript"></script>
        <title>COMP206A1Renwick</title>
    </head>
    <body>
       
        <div class="firstfloat">
        <form class="AddEmployeeForm" action="httpparams.php" onsubmit="return validateAddEmployeeForm()" > 
	<fieldset class="AddEmployeeField">
            <legend>Add Employee</legend>

                <p>
                <label>First Name: </label>
                <input class="input" type="text" id="empFname" name="empFName" placeholder="John"/>
                </p>

                <p>
                <label>Last Name: </label>
                <input class="input" type="text" id="empLname" name="empLName" placeholder="Smith"/>
                </p>

                <p>
                <label>Phone: </label>
                <input class="input" type="text" id="empPhone" name="empPhone" placeholder="555-555-1234"/>
                </p>

                <p>
                <label>Address: </label>
                <input class="input" type="text" id="empAddress" name="empAddress" placeholder="123 First St."/>
                </p>

                <p>
                <label>Email: </label>
                <input class="input" type="text" id="empEmail" name="empEmail" placeholder="johnsmith@internet.ca"/>
                </p>

                <p>
                <label>Job Position: </label>
                <select class="input" id="jobPosition" name="jobPosition"> 
                        <option value="Chef">Chef</option>
                        <option value="Server">Server</option>
                        <option value="Bartender">Bartender</option>
                        <option value="Host">Host</option>
                        <option value="Manager">Manager</option>
                </select>
                </p>

                <p>
                <label>Full Time? </label>
                <input class="input" type="checkbox" id="fullTime"/>
                </p>

                <p><button class="buttons" type="reset">Clear Data</button></p>
                <p><input class="buttons" type="submit" value="Send"/></p>
	</fieldset> 
        </form>
        </div>
        

        <div class="secondfloat">
	<form class="AddShiftForm" action="httpparams.php" onsubmit="return validateAddShiftForm()"> 
	<fieldset class="AddShiftField">
            <legend>Add Shift</legend>

                <p>
                <label>First Name: </label>
                <input class="input" type="text" id="shiftFname" name="shiftFname" placeholder="John"/>
                </p>

                <p>
                <label>Last Name: </label>
                <input class="input" type="text" id="shiftLname" name="shiftLname" placeholder="Smith"/>
                </p>


                <label id="radiolabel">Shift Date: </label>
                    <div class="radio-inline">
                        <input type="radio" id="shiftDay" name="shiftDay" value="Sunday" checked>S
                        <input type="radio" id="shiftDay" name="shiftDay" value="Monday">M
                        <input type="radio" id="shiftDay" name="shiftDay" value="Tuesday">T
                        <input type="radio" id="shiftDay" name="shiftDay" value="Wednesday">W
                        <input type="radio" id="shiftDay" name="shiftDay" value="Thursday">T
                        <input type="radio" id="shiftDay" name="shiftDay" value="Friday">F
                        <input type="radio" id="shiftDay" name="shiftDay" value="Saturday">S
                    </div>
                </p>

                <p>
                <label>Start Time: </label>
                <input class="input" type="text" id="shiftStartTime" name="shiftStartTime" placeholder="9:00"/>
                </p>

                <p>
                <label>End Time: </label>
                <input class="input" type="text" id="shiftEndTime" name="shiftEndTime" placeholder="17:00"/>
                </p>

                <p><button class="buttons" type="reset">Clear Data</button></p>
                <p><input class="buttons" type="submit" value="Send"/></p>
	</fieldset> 
	</form>
        </div>

    </body>
</html>

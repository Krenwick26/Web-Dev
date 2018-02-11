function validateAddEmployeeForm()
{
    var mismatches = 0;
    
    var reempPhone = /^\d\d\d[-]\d\d\d[-]\d\d\d\d$/;
    var empPhone = document.getElementById("empPhone");
    if (!empPhone.value.match(reempPhone))
    {
        empPhone.style.backgroundColor= "red";
        mismatches++;
    }
    
    var reempFname = /^[A-Z][a-z]+$/;
    var empFname = document.getElementById("empFname");
    if (!empFname.value.match(reempFname))
    {
        empFname.style.backgroundColor= "red";
        mismatches++;
    }

    var reempLname = /^[A-Z][a-z]+$/;
    var empLname = document.getElementById("empLname");
    if (!empLname.value.match(reempLname))
    {
        empLname.style.backgroundColor= "red";
        mismatches++;
    }

    var reempAddress = /^\d+[ ][A-Z][A-Za-z]+[ ][A-Za-z]+[.]*$/;
    var empAddress = document.getElementById("empAddress");
    if (!empAddress.value.match(reempAddress))
    {
        empAddress.style.backgroundColor= "red";
        mismatches++;
    }

    var reempEmail = /^[a-z]+[@][a-z]+[.][a-z]+$/;
    var empEmail = document.getElementById("empEmail");
    if (!empEmail.value.match(reempEmail))
    {
        empEmail.style.backgroundColor= "red";
        mismatches++;
    }

    if (mismatches > 0)
        return false;
}

function validateAddShiftForm()
{
    var mismatches = 0;
        
    var reshiftFname = /^[A-Z][a-z]+$/;
    var shiftFname = document.getElementById("shiftFname");
    if (!shiftFname.value.match(reshiftFname))
    {
        shiftFname.style.backgroundColor= "red";
        mismatches++;
    }

    var reshiftLname = /^[A-Z][a-z]+$/;
    var shiftLname = document.getElementById("shiftLname");
    if (!shiftLname.value.match(reshiftLname))
    {
        shiftLname.style.backgroundColor= "red";
        mismatches++;
    }

    var reshiftStartTime = /^([0-1]?[0-9]|[2][0-3]):([0-5][0-9])$/;
    var shiftStartTime = document.getElementById("shiftStartTime");
    if (!shiftStartTime.value.match(reshiftStartTime))
    {
        shiftStartTime.style.backgroundColor= "red";
        mismatches++;
    }
   
    var reshiftEndTime = /^([0-1]?[0-9]|[2][0-3]):([0-5][0-9])$/;
    var shiftEndTime = document.getElementById("shiftEndTime");
    if (!shiftEndTime.value.match(reshiftEndTime))
    {
        shiftEndTime.style.backgroundColor= "red";
        mismatches++;
    }

    if (mismatches > 0)
        return false;
}
    
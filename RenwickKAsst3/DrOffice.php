<!-- http://localhost/RenwickKAsst3/DrOffice.php -->

<?php
require_once('clsPerson.php');
require_once('clsPhysician.php');
require_once('clsEmployee.php');
require_once('clsPatient.php');
require_once('clsAppt.php');

date_default_timezone_set('EST');


echo "<h2>Exercise 1: dob is a string, the WRONG way</h2>";                         

	$dob = '1956-04-20';
	$theDoc = new clsPhysician("Ronald", "McDonald", $dob, "465-688-4648", "4251096", "Brain Surgery");
	
	echo "<p>Testing gets and sets: " . $theDoc->testGetsAndSets() . "</p>";
	echo "<p>File folder label: " . $theDoc->produceFileFolderLabel() . "</p>";


	
echo "<h2>Exercise 2: dob and start date are hard coded date objects</h2>";

	$dob = new DateTime('1956-04-20 11:43:01PM');
	$startDate = new DateTime('2015-08-19 10:13:53AM');
	
	$employee = new clsEmployee("Donald", "Duck", $dob, "613-222-2222", "6482252", "613-838-6423", "famini@gmail.com", $startDate);
	
	echo "<p>Testing gets and sets: " . $employee->testGetsAndSets() . "</p>";	
	echo "<p>File folder label: " . $employee->produceFileFolderLabel() . "</p>";



echo "<h2>Exercise 3: dob is 20 years before today's date</h2>";

	$dob = new DateTime('-20 years');
	
	$patient = new clsPatient("Scooby", "Doo", $dob, "613-331-6433", "2655542", "613-331-6433", "dooby@doo.com");

	echo "<p>Testing gets and sets: " . $patient->testGetsAndSets() . "</p>";	
	echo "<p>File folder label: " . $patient->produceFileFolderLabel() . "</p>";



echo "<h2>Exercise 4: employee data from user</h2>";
	$SIN = '123456789'; $workPhone = '613-222-2222'; $workEmail = 'cat@cat.com'; 
	$startYear = 2016; $startMonth=8; $startDay=2;
	$month = 5; $day = 25; $year = 1999; $hour = 13; $minute = 55; 
	$first="meow"; $last="claws";$homePhone = '555-555-5555';

	$dob = new DateTime();
	$dob->setDate($year, $month, $day);
	$dob->setTime($hour, $minute);

	$startDate = new DateTime();
	$startDate->setDate($startYear, $startMonth, $startDay);
	$startDate->setTime($hour, $minute);	

	$employee = new clsEmployee($first, $last, $dob, $homePhone, $SIN, $workPhone, $workEmail, $startDate);
	 
	echo "<p>File folder label: " . $employee->produceFileFolderLabel() . "</p>";



echo "<h2>Exercise 5: Age calculation</h2>";
	$dob = new DateTime('1982-02-18 9:12am');
	$patient = new clsPatient("Katrina", "Renwick", $dob, "613-777-1419", "4251096", "613-777-1419", "krenwick@outlook.com");
	echo $patient->calculateAge();
	
	
	
echo "<h2>Exercise 6: Next appointment date</h2>";
	$numMonths=2;
	$numDays = 3;
	$myApptDate = new datetime('2015-8-9');
	$myBookedApptTime = new datetime('11:04am');
	$myActualApptTime = new datetime('11:55am');  
	$myAppt = new clsAppt($myApptDate,$myBookedApptTime,$myActualApptTime);
	
	echo "<p>" . $myAppt->calcNextApptDate($numMonths, $numDays) . "</p>";

	
	
echo "<h2>Exercise 7: Early or late</h2>";
	// Using the myAppt object from exercise 6, call method determineEarlyOrLate.
	if ($myAppt->determineEarlyOrLate()<0)
		echo "Early<br>";
	else if ($myAppt->determineEarlyOrLate()===0)
		echo "On time<br>";
	else	
		echo "Late<br>";
		

	
	
	
	// Here in DrOffice.php, echo a string:
	//    Your appt was booked for <BookedApptTime>. 
	//    You saw the doctor at <ActualApptTime>.
	//    Your wait time was <x> minutes.
	
	echo "Your appt was booked for: " . $myAppt->getBookedApptTime()->format('g:iA') . "<br>"
	   . "You saw the doctor at " . $myAppt->getActualApptTime()->format('g:iA') . "<br>"    
	   . "Your wait time was " . $myAppt->determineEarlyOrLate() . " minutes.<br>";
	
	


?>

 
 
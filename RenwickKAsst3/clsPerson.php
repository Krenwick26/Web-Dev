<?php
// an abstract class is a class that can't be used to create an object
// clsPerson is a super class that other classes can inherit
abstract class clsPerson
{
	private $firstName;
	private $lastName;
	private $dob;
	private $HomePhone;
	
	public function __construct($pFirstName, $pLastName, &$pDob, $pHomePhone)
	{
		$this->setDob($pDob);
		$this->setFirstName($pFirstName);
		$this->setLastName($pLastName);
		$this->setHomePhone($pHomePhone);
	}
	
	public function getFirstName() { return $this->firstName; }
	public function setFirstName($pFirstName) { if ($pFirstName!=NULL) $this->firstName=$pFirstName; }
	public function getLastName() { return $this->lastName;  }
	public function setLastName($pLastName) { if ($pLastName!=NULL) $this->lastName=$pLastName; }
	public function getDob() { return $this->dob; }
	public function setDob($pDob) { if ($pDob!=NULL) $this->dob = $pDob; }
	public function getHomePhone() { return $this->HomePhone; }
	public function setHomePhone($pHomePhone) { if ($pHomePhone!= NULL) $this->HomePhone=$pHomePhone; }
	  
	abstract public function produceFileFolderLabel();
	abstract public function testGetsAndSets();
	

	public function calculateAge()
	{  
		date_default_timezone_set('EST');
		
		$today = new DateTime();

		$age = $today->diff($this->dob);
		
		return "Born: " . $this->dob->format('F j, Y \a\t g:i:a.') . "<br>"
			 . "Today's Date: " . $today->format('F j, Y.') . "<br>"
			 . $age->format('You are %Y years, %m months, %d days, %h hours, %i minutes old.') . "<br>";
	}
}
?>
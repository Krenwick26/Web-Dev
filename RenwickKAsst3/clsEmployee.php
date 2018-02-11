<?php
// clsEmployee inherits clsPerson. 
// clsEmployee is a subclass or concrete class
class clsEmployee extends clsPerson
{
	private $SIN;
	private $workPhone;
	private $workEmail;
	private $dateStarted; //datetime?
	
	public function __construct($pFirstName, $pLastName, &$pDob, $pHomePhone, $pSIN, $pWorkPhone, $pWorkEmail, &$pDateStarted)
	{
		parent::__construct($pFirstName, $pLastName, $pDob, $pHomePhone);
		$this->setSIN($pSIN);
		$this->setWorkPhone($pWorkPhone); 
		$this->setWorkEmail($pWorkEmail); 
		$this->setDateStarted($pDateStarted); 
	}
	
	public function getSIN() 	{ return $this->SIN; }
	public function setSIN($pSIN) {if ($pSIN != NULL) $this->SIN= $pSIN;}
	public function getWorkPhone() 	{ return $this->workPhone; }
	public function setWorkPhone($pWorkPhone) {if ($pWorkPhone!= NULL) $this->workPhone= $pWorkPhone;}	
	public function getWorkEmail() { return $this->workEmail; }
	public function setWorkEmail($pWorkEmail) {if ($pWorkEmail!= NULL) $this->workEmail= $pWorkEmail;}
	public function getDateStarted() {return $this->dateStarted; }
	public function setDateStarted($pDateStarted) {if ($pDateStarted!= NULL) {$this->dateStarted= $pDateStarted;}}
	
	public function testGetsAndSets()
	{
		return "Employee: " .  
		     $this->getSIN() . " " . 
		     parent::getFirstName() . " " . 
			 parent::getLastName() . " " . 
			 parent::getDob()->format('M j, Y') . " " . 
			 parent::getHomePhone() . " " . 
			 $this->getWorkPhone() . " " . 
			 $this->getWorkEmail() . " " . 
	         $this->getDateStarted()->format('M j, Y');
	}
	
	public function produceFileFolderLabel()
	{
		return "Employee: " . 
			 $this->SIN . " " . 
			 parent::getFirstName() . " " . 
			 parent::getLastName() . " " . 
			 $this->dateStarted->format('M j, Y');
	}
} 
?>
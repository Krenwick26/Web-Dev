<?php
// clsPhysician inherits clsPerson. 
// clsPhysician is a subclass or concrete class
class clsPhysician extends clsPerson
{
	private $ID;
	private $specialty;
	
	public function __construct($pFirstName, $pLastName, &$pDob, $pHomePhone, $pID, $pSpecialty)
	{
		parent::__construct($pFirstName, $pLastName, $pDob, $pHomePhone);
		$this->setID($pID);
		$this->setSpecialty($pSpecialty); 
	}
	
	
	public function getID() { return $this->ID; }
	public function setID($pID) {if ($pID!= NULL) $this->ID= $pID;}	
	public function getSpecialty() { return $this->specialty; }
	public function setSpecialty($pSpecialty) {if ($pSpecialty!= NULL) $this->specialty= $pSpecialty;}
	
	public function testGetsAndSets()
	{
		return "Doctor: " .  $this->getID() . " " . 
		     parent::getFirstName() . " " . 
			 parent::getLastName() . " " . 
			 parent::getDob() . " " . 
			 parent::getHomePhone() . " " . 
			 $this->getSpecialty() ; 
	}


	public function produceFileFolderLabel()
	{
		return "Doctor: " . parent::getFirstName() . " " . 
			 parent::getLastName() . " " . 
			 $this->specialty;
	}
	
}	
?>
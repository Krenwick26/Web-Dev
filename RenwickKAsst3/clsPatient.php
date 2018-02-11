<?php
//  clsPatient inherits clsPerson. 
// clsPatient is a subclass or concrete class
class clsPatient extends clsPerson
{
	private $HCN, $cellPhone, $patientEmail;
	
	public function __construct($pFirstName, $pLastName, &$pDob, $pHomePhone, $pHCN, $pCellPhone, $pPatientEmail)
	{
		parent::__construct($pFirstName, $pLastName, $pDob, $pHomePhone);
		$this->setHCN($pHCN);
		$this->setCellPhone($pCellPhone); 
		$this->setPatientEmail($pPatientEmail); 
	}
	
	public function getHCN() 	{ return $this->HCN; }
	public function setHCN($pHCN) {if ($pHCN!= NULL) $this->HCN= $pHCN;}	
	public function getCellPhone() 	{ return $this->cellPhone; }
	public function setCellPhone($pCellPhone) {if ($pCellPhone!= NULL) $this->cellPhone= $pCellPhone;}
	public function getPatientEmail() 	{ return $this->patientEmail; }
	public function setPatientEmail($pPatientEmail) {if ($pPatientEmail!= NULL) $this->patientEmail= $pPatientEmail;}

	public function testGetsAndSets()
	{  
		return "Patient: " .  $this->getHCN() . " " . 
		     parent::getFirstName() . " " . 
			 parent::getLastName() . " " . 
			 parent::getDob()->format('M j, Y') . " " . 
			 parent::getHomePhone() . " " . 
			 $this->getCellPhone() . " " . 
	         $this->getPatientEmail() . " " ;
	}

	public function produceFileFolderLabel()
	{
		return "Patient: " . $this->HCN . " " . parent::getFirstName() . " " . parent::getLastName() . " " .  parent::getDob()->format('M j, Y');
	}
	
}	
?>
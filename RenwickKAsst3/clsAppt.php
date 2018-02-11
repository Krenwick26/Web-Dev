<?php  
class clsAppt
{
	private $apptDate;
	private $bookedApptTime;
	private $actualApptTime;
	
	public function __construct(&$pApptDate, &$pBookedApptTime, &$pActualApptTime)
	{
		$this->setApptDate($pApptDate);
		$this->setBookedApptTime($pBookedApptTime);
		$this->setActualApptTime($pActualApptTime);
	}
	
	public function getApptDate() { return $this->apptDate; }
	public function setApptDate($pApptDate) { if ($pApptDate != NULL) $this->apptDate = $pApptDate;}
	public function getBookedApptTime() { return $this->bookedApptTime; }
	public function setBookedApptTime($pBookedApptTime) { if ($pBookedApptTime != NULL) $this->bookedApptTime = $pBookedApptTime;}
	public function getActualApptTime() { return $this->actualApptTime; }
	public function setActualApptTime($pActualApptTime) { if ($pActualApptTime != NULL) $this->actualApptTime = $pActualApptTime;}
	
	public function testGetsAndSets()
	{
		echo "<p>Testing Appt gets and sets: " . 
		($this->apptDate!=null ? $this->getApptDate()->format('M d, Y') : "") . " " .
		($this->bookedApptTime!=null ? $this->getBookedApptTime()->format('h:i') : "") . " " .
		($this->actualApptTime!=null ? $this->getActualApptTime()->format('h:i') : "") . "</p>";
	}
	
	public function calcNextApptDate($noMonths, $noDays)
	{		
		$nextAppt = clone $this->apptDate;
		$interval = new DateInterval('P'.$noMonths.'M'.$noDays.'D');
		$nextAppt->add($interval);
		
		return "Original appt: " . $this->apptDate->format('F j, Y') . "<br>"
			 . "Your next appt is in $noMonths months and $noDays days <br>"    
			 . "That date is " . $nextAppt->format('F j, Y.') . "<br>";
	}

	public function determineEarlyOrLate()
	{
		$minutesLate = $this->bookedApptTime->diff($this->actualApptTime);
		return $minutesLate->format('%R%i');
	}
}
?>

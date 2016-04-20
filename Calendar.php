<?php

class Calendar
{
	public function __construct()
	{
		echo "Hello Kolendar !";
	}
	
	private $CurrentDate  = null;
	private $CurrentDay   = 0;
	private $CurrentMonth = 0;
	private $CurrentYear  = 0;
	private $DaysInMonth  = 0;
	private $DayNames     = array("Pon","Tor","Sre","Čet","Pet","Sob","Ned");
	
	public function Show()
	{
		$this->_ShowDays();
	}
	
	private function _ShowDays()
	{
		echo '<ul>';
		foreach($this->DayNames as $day)
		{
			echo '<li>'. $day .'</li>';
		}		
		echo '</ul>';
	}
	
	
}

?>
<?php

class Calendar
{
	public function __construct()
	{
		echo "Class created";
		$CurrentYear  = date("Y");
		$CurrentMonth = date("m");
		$CurrentDay   = date("d");
		$CurrentDate  = date("d.m.Y");
		echo $CurrentYear.'-'.$CurrentMonth.'-'.$CurrentDay.' date: '.$CurrentDate;
	}
	
	private $CurrentDate  = null;
	private $CurrentDay   = 0;
	private $CurrentMonth = 0;
	private $CurrentYear  = 0;
	private $DaysInMonth  = 0;
	private $DayNames     = array("Pon","Tor","Sre","Čet","Pet","Sob","Ned");
	
	public function Show()
	{
	    echo '<div id="Calendar">';
		$this->_ShowDays();
        echo '</div>';
		
		echo date("D.m.Y - w",strtotime("01.01.2016"));
	}
    	
	private function _ShowDays()
	{
		echo '<ul id="DayHeader">';
		foreach($this->DayNames as $day)
		{
			echo '<li>'. $day .'</li>';
		}		
		echo '</ul>';
	}
	
	
}

?>
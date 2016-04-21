<?php

class Calendar
{
	public function __construct()
	{
		echo "Class created";
		$this->CurrentYear  = date("Y");
		$this->CurrentMonth = date("m");
		$this->CurrentDay   = date("d");
		$this->CurrentDate  = date("d.m.Y");
		echo $this->CurrentYear.'-'.$this->CurrentMonth.'-'.$this->CurrentDay.' date: '.$this->CurrentDate;
	}
	
	private $CurrentDate ;
	private $CurrentDay ;
	private $CurrentMonth ;
	private $CurrentYear ;
	private $DaysInMonth  = 0;
	private $FirstDayInMonth = 0;
	private $DayNames     = array("Pon","Tor","Sre","Čet","Pet","Sob","Ned");
	
	public function Show()
	{
	    echo '<div id="Calendar">';
		$this->_ShowDayLabels();
        echo '</div>';
		
		echo date("D.m.Y - w",strtotime("01.".$this->getCurrentMonth().".2016"));
	}
    
	function getCurrentMonth()
	{
		return $this->CurrentMonth;
	}
		
	private function _ShowDayLabels()
	{
		echo '<ul id="DayHeader">';
		foreach($this->DayNames as $day)
		{
			echo '<li>'. $day .'</li>';
		}		
		echo '</ul>';
	}
	
	private function _ShowDay()
	{
		
	}
	
	
}

?>
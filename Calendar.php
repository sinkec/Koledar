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
		$this->DaysInMonth  = date("t");
		$this->FirstDayInMonth = intval(date("D.m.Y - w",strtotime("01.".$this->getCurrentMonth().".2016")));
		echo $this->CurrentYear.'-'.$this->CurrentMonth.'-'.$this->CurrentDay.' date: '.$this->CurrentDate;
	}
	
	private $CurrentDate = null ;
	private $CurrentDay = 0;
	private $CurrentMonth = 0;
	private $CurrentYear = 0;
	private $DaysInMonth  = 0;
	private $FirstDayInMonth = 0;
	private $DayNames     = array("Pon","Tor","Sre","Čet","Pet","Sob","Ned");
	
	public function Show()
	{
	    echo '<div id="Calendar">';
		$this->_ShowDayLabels();
		
		$this->_ShowRow();
        
		echo '</div>';
		
		echo $this->FirstDayInMonth;
	}
	function _ShowRow() /*24.04. 2016 - npiši do konca*/
	{
		echo '<div id ="Row">test</div>';
		echo '<div id ="Row">test</div>';
		echo '<div id ="Row">test</div>';
	}
   /*dont know if i need this*/ 
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
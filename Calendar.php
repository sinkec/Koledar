<?php

class Calendar
{
	public function __construct()
	{
		echo 'Class created <br>';
		$this->CurrentYear  = date("Y");
		$this->CurrentMonth = date("m");
		$this->CurrentDay   = date("d");
		$this->CurrentDate  = date("d.m.Y");
		$this->DaysInMonth  = date("t");
		$this->FirstDayInMonth = date("w",strtotime("01.".$this->CurrentMonth.".2016"));
		echo $this->CurrentYear.'-'.$this->CurrentMonth.'-'.$this->CurrentDay.' date: '.$this->CurrentDate;
		
		echo $this->FirstDayInMonth;
	}
	
	private $CurrentDate = null ;
	private $CurrentDay = 0;
	private $CurrentMonth = 0;
	private $CurrentYear = 0;
	private $DaysInMonth  = 0;
	private $FirstDayInMonth;
	private $DayNames     = array("Pon","Tor","Sre","Čet","Pet","Sob","Ned");
	
	public function Show()
	{
	    echo '<div id="Calendar">';
		$this->_ShowDayLabels();
		
		$this->_ShowDays();
        
		echo '</div>';
	}
	function _ShowDays() /* izris celega mececa, vrste in dnevi */
	{
		$firstRowDay = intval($this->FirstDayInMonth);
		$lastRowDays = (intval($this->DaysInMonth) - ($firstRowDay-2))%7;
		$currentDay = 1;
		$currentBox = 1;
		/*prva vrstica*/
		echo '<div id ="Row"><ul>';
		for($i =1;$i<3/*$firstRowDay*/;$i++)
		{
			echo '<li>123</li>';
			$currentBox++;
		}
		echo '</ul></div>';
		
		/*Prvi dan v mesecu in naprej*/
		
		
		
		
		echo '<div id ="Row">'.$this->FirstDayInMonth.'</div>';
		echo '<div id ="Row">wtf</div>';
	}
	
	/*Izris napisov za dan*/	
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
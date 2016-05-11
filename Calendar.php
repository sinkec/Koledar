<?php


/*07.05.2016 - Razred Calendar bo vseboval podatke ko so dan, mesec, leto, funkcije za izris in delo s samim koledarjem */
class Calendar
{
    private $CurrentDate   = null; //datum 
    private $CurrentYear  = 0;    //leto
    private $CurrentMonth = 0;    //mesec
    private $CurrentDay   = 0;    //dan
    private $DayLabels =  array("Ponedeljek","Torek","Sreda","Četrtek","Petek","Sobota","Nedelja"); //imena dnevov - v enodimenzionalnem polju
    
    public function __construct()
    {
        $this->CurrentDate = date('d.m.y');
        echo $this->CurrentDate;
    }
      
}

?>
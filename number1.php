<?php
// $firstdate = new DateTime("2007-03-24 ");
// $seconddate = new DateTime(" 2009-06-26");
// $difference = $firstdate->diff($seconddate);
// echo "Number 1 <br> <br>";

// echo "Difference : " . $difference->y . " years, " . $difference->m." months, ".$difference->d." days ";


class MinusDate{
    public $firstdate ;
    public $seconddate;

    function __construct($firstdate,$seconddate){
        $this->firstdate = $firstdate;
        $this->seconddate = $seconddate;
    }
    function get_firstdate(){
        return $this->firstdate." - firstdate";
    }
    function get_seconddate(){
        return $this->seconddate." - seconddate";
    }
    function get_diff(){
        $diff = abs(strtotime($this->seconddate) - strtotime($this->firstdate));
        $years = floor($diff / (365*60*60*24));
        $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
        $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
        echo "Difference : ", $years." years ", $months." months ", $days." days ";
        
    }

   
}
$dateTime = new MinusDate("2007-03-1","2009-06-2");
echo $dateTime->get_firstdate();
echo "<br>";
echo $dateTime->get_seconddate();
echo "<br>";
echo $dateTime->get_diff();

?>

<?php

class acceptInput{

public $firstnumber;

function set_firstnumber($firstnumber){
    $this->$firstnumber = $firstnumber;
}
function get_firstnumber(){
    return $this->$firstnumber;
}
}
$add = new acceptInput();
$add->set_firstnumber(5);
$add->get_firstnumber();
echo $add->firstnumber;







?>
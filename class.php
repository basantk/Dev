<?php
class human{
public $gender;//member variable
const valsn=2;
public function __construct($gender){ //constructor 
	$this->gender=$gender;//
	//echo self::get_gender();
	//echo $this->valsn;
}
public function get_gender(){//member function
	return $this->gender;
}
}
$object = new human('Male/Femal');
//echo $object->get_gender();
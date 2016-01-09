<?php
# Class is a blue print of objects
# A class describes all the attributes of objects, as well as the methods that implement the behaviour of member objects
# A class acts as a blue-print that defines the properties, states, and behaviours that are common to a number of objects. 
# An object is an instance of the class.
# http://www.indiabix.com/technical/dotnet/object-oriented-programming/
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
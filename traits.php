<?php
class baseClass{
	public function getReturnType(){
		return "Base Class";
	}
}
trait traitSample{
	public function getReturnType(){
		echo 'TraitSample';
		parent::getReturnType();
	}
} 
class test extends baseClass{
	use traitSample;
}
$obj1 = new test();
echo $obj1->getReturnType();//TraitSample:BaseClass
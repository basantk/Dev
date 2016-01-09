<?php
//=====Abstract classes are those classes which can not be directly initialized
//Main motive of creating abstract classes in php is to apply restriction of direct initialization or object creation.===
//Abstract classes in php are simillar like other oop languages. You can create abstract classes in php using abstract keyword. 
//Once you will make any class abstract in php you can not create object of that class.
abstract class parentClass{
	public function addition(){
		echo 'Hello';
	}
}
//$onject=new parentClass();//it will give the error
class childClass extends parentClass{
	public function subtration(){
		return 'Childclass subtrations';
	}
}	
$objectofchildclass=new childClass();
echo $objectofchildclass->addition();


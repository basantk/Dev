<?php
/*
Class and Object:-
A class is used in object-oriented programming to describe one or more objects. 
It serves as a template for creating, or instantiating, specific objects within a program.
While each object is created from a single class, one class can be used to instantiate multiple objects.

My Definition

Class is a template which is used in object oriented programming to describe Object.
it serve as template for crating,or instantiating ,specific objects with in program.
--each object is created from single class.
--One class can be used to instantiate multiple objects.

What is This Keyword:-
To facilitate structure ability to reference themselves.
'This'  keyword acts as a pointer to the current object.

Note:-
What is difference between class and interface?
1) Interfaces do not contain business logic 
2) You must extend interface to use.
3) You can't create object of interface.



Traits in php.

What is Traits in PHP?
Traits are a mechanism for code reuse in single inheritance.
A Trait is similar to a class, but only intended to group functionality in a fine-grained and consistent way. 
It is not possible to instantiate a Trait but addition to traditional inheritance. 
It is intended to reduce some limitations of single inheritance to reuse sets of methods freely in several independent classes living in different class hierarchies.
Multiple Traits can be inserted into a class by listing them in the use statement, separated by commas(,).
If two Traits insert a method with the same name, a fatal error is produced.

Example of Traits
class BaseClass{
    function getReturnType() {
        return 'BaseClass';
    }
}
trait traitSample {
    function getReturnType() {
        echo "TraitSample:";
        parent::getReturnType();
    }    
}

class Class1 extends BaseClass {
    use traitSample;   
}

$obj1 = new Class1();
$obj1->getReturnType();//TraitSample:BaseClass

*/
# Encapsulation is the packing of data and functions into a single component. 
# In single word, encapsulation means, visibility
# It refers to visibility of methods or properties of a class. 
class Encap{
	public $name;
	protected $email;
	private $phone;
	public function uerEmail($emailId){
		return $this->email=$emailId;
	}
	public function phone($phoneNum){
		return $this->phone=$phoneNum;
	}
}
$obj=new Encap();
echo $obj->uerEmail('basant@phroecs.com');
echo $obj->phone('9911052957122');

/*Testing str_replace*/
//$vowels = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
//echo $onlyconsonants = str_replace($vowels, "", "Hello World of PHP");

/*Testing strpos*/
//$mystring = 'abc';
//$findme   = 'b';
//echo $pos = strpos($mystring, $findme);

//$haystack = 'ababcd';
//$needle   = 'B';
//echo $pos      = strripos($haystack, $needle);//last and case insensitive
 //$array = array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10');    
    //echo join('a', array('b','c')); 	
	//parse_str("name=Peter||age=43",$myArray);
//print_r($myArray);

<?php
include('class.php');
class person extends human{
	public $name;
	public $sirname;
	public $gender;
	
	public  function set_name($name){
		$this->name=$name;
	}
	public  function set_sirname($sirname){
		$this->sirname=$sirname;
	}
	public  function get_name(){
		return $this->name;
	}
	public  function get_sirname(){
		return $this->sirname;
	}
	public function get_gender(){//overriding human::get_gender()
	return 'hello';
	}
	public function get_all(){
		echo self::get_gender();
		echo self::get_name();
	}
}
$Basant= new person('Male');
$Basant->set_name('Basant');
$Basant->set_sirname('Kumar');
//echo $Basant->get_all();
//echo $Basant->get_name().' '.$Basant->get_sirname().' is a '.$Basant->get_gender();
//echo person::get_name().' '.person::set_sirname().' is a '.person::get_gender();

//
//Multilevel Inheritance
class A{
	public function a(){
		return "Class A and Member a:";
	}
}
class B extends A{
	public function b(){
		//echo "Class B and Member b";
		return $this->a();
	}
	
}
class C extends B{
	public function c(){
		return "Hello C Class";
	}
}
$obj=new C();
//echo $obj->b();

//Multiple Inheritance Not possible in PHP so Use Traits Or Interface
/*class D{
	public function d(){
		return "Class D and Member Function d";
	}
}
class E {
	public function e(){
		return "Class E and Member Function e";
	}
}
class F extends D,E{
	public function f(){
		return "CLass F and Member function f";
	}
}

$Objectm=new F();
echo $Objectm->f();*/

//Example of all types of Inheritance In C++
#Example of single level inheritance
class Base
{

};

class Derv: public Base
{

};
#Multi level inheritance:
/*
	In multi level inheritance, there will be a chain of inheritance with a class derived from only one parent and will have only one child class.
*/
class A
{

};

class B: public A
{

};

class C: public B
{

};


#Multiple inheritance

#Defin: One class being derived from multiple parent classes.
class A
{

};

class B
{

};

class C: public B, public A
{

};

#Hierarchical inheritance
#Many classes deriving from one class.
class A
{

};

class B: public A
{

};

class C: public A
{

};
#Hybrid inheritance
#It is a mixture of 2 or more of above types of inheritance. There is no pattern of deriving from classes.
class A
{

};

class B
{

};

class C: public A, public B
{

};

class D: public A
{

};
 

class X: public D, public C
{

};

#PHP Supports 3 types of inheritance.
#1.Single Inheritance,
#1.Multilevel Inheritance,
#1.hierarchical Inheritance,

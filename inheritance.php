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

//Multiple Inheritance Not possible in PHP so Use Traits and Interface
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



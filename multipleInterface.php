<?php
#You can also extend multiple interface in one interface in php.
interface template1{
	public function f1();
}
interface template2{
	public function f2();
}
interface template3 extends template1,template2{
	public function f3();
}
class test implements template3{
	public function f1(){
		return "Hello this F1";
	}
	public function f2(){
		return "Hello this F2";
	}
	public function f3(){
		return "Hello this F3";
	}
}
$object =new test();
//echo $object->f3();

#You can also implement more than one interface in php class.
interface temp1{
	public function ff1();
}
interface temp2{
	public function ff2();
}
class temp3 implements temp1,temp2{
	public function ff2(){
		return "Hello I Am ff2";
	}
	public function ff1(){
		return "Hello I Am ff2";
	}
}
$obj=new temp3();


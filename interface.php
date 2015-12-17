<?php
interface template1{
	public function f1();
}
interface template2 extends template1{
	public function f2();
}
class abc implements template2{
	public function f2(){
		return "Function F2 Calling";
	}
	public function f1(){
		return "Function F1 Calling";
	}
}
$onject=new abc();
echo $onject->f1();


/*
Differences between abstract class and interface in PHP
Following are some main difference between abstract classes and interface in php

In abstract classes this is not necessary that every method should be abstract. But in interface every method is abstract.
Multiple and multilevel both type of inheritance is possible in interface. But single and multilevel inheritance is possible in abstract classes.
Method of php interface must be public only. Method in abstract class in php could be public or protected both.
In abstract class you can define as well as declare methods. But in interface you can only defined your methods.
*/
<?php
/*
* As we know that abstract functions are those functions of abstract class which is only defined.
* It will be declared in your child class. 
* You can create any method abstract using keyword abstract. 
* You can only create abstract method either in abstract class or interface. 
*/
abstract class parentClass{
	
	abstract protected function xyz($a,$b);
	//abstract private function f3(); //this will throw error (private member can define)
}
class childClass extends parentClass{
	public function xyz($name,$email){
		return $name.' '.$email;
	}
}
$object =new childClass('Male');
echo $object->xyz('Basant','basantk21@gmail.com');

/*
Important:-Note

 In above code you can see that you have declare f3 function in abstract class.
 But private declaration of the abstract method will always throw error.
 Because private method is available only in the same class context. 
 But in case of xyz. This is protected. 
 Now in child class we have defined it as public because public is less restricted than protected. 
 We have defined it public because no any visibility is less restricted than public.

*/
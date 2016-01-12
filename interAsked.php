<?php 
/*
	1. What is Constant and Static variable?
		Ans: Static Variable:- Static variable on the class scope not on object scope its value can changed.
							   we can access without using object of the class. its initialise by using `static` keyword
			Constant keyword: Constant is just a constant it can not change after declare.
							  in PHP we can define like 
								1. define('CONSTANT_NAME',$value); it can be accessed from anywhere.
								2. In Class :-
									class xyz(){
										const INTEREST=4;//it is differ from the normal variable.in that we can not use $ symbols.
									}
								We can access by using Scope Resolution and Self Keyword.	
							   
	2. What are difference bet Char and Varchar ?
		Ans: Char: CHAR is fixed length.Maximum number of characters the data type can hold is 255 characters.
					-It is 50% faster than VARCHAR
					example: if we enter make char(6) and enter 3 character then memory allocate full memory.
			VARCHAR: - It is dynamic memory allocation. we can say that it is variable length.
					   It is slower that CHAR.
				   
	3. How to convert Json to object or Array ?
		Ans: $obj = json_decode($json); it will print in object.
			 $array=json_decode($json,true);
			 
	4. What is difference between Synchronous and ASynchronous Ajax?
		Ans: Synchronous Ajax  : is a technology where the program wait for the response after request before other request.
								-Script stops and waits for the server to send back a reply before continuing.
		     Asynchronous Ajax : is Technology where the program does not wait for the response .
								-Where the script allows the page to continue to be processed and will handle the reply if and when it arrives
								
	5. JavaScript is oops language or procedural language?
		Ans: OOPS
	6. What are design pattern in php?
		Ans: 
	7. What is .htaccess file ? How many .htaccess file in CakePhp ?
		Ans: Three .htaccess file in cakephp.
			1. Root forlder
			2. App folder
			3. Webroot folder
	8. function abc(){
		static $x=0;
		return $x++;
	   }
	   foreach($i=0;$i<10;$++){
		echo abc();
	   }
	   O/P: 
	9.  What are array_merge and array_combine ?
	10. What is array_slice?
	11. What is in_array ?
	12. How to find a variable is int or string in php ?
	13. What is Abstract Class?Is abstract is protected?
	14. What is interface?
	15. What is Function ?
	16. What is Private and Protected ?
	17. What is Component in CakePhp ?
	18. What is Element in Cakephp ?
	19. What is ORM in CakePHP ?
	20. How to find Second highest Salary ?
	21. Difference between in javascript and ajax ?
	22. Some Methods and events in javascript ?
	23. What is the use of Hooks in CI and Cakephp
	24. How to change the layout in cakephp?
	25. How to define Contact in php ?
	26. What is indexing ?
	27. What is primary key and foreign key.
	28. What is Session and Cookie, How to set the Session and cookie.
	29. What is SOAP and REST.and difference?
	30. What are Magic Method in php ?
	31. What is __call magic method ?how to call ?
	32. What is Constructor ?
	33. What is Inheritance?How many?dose PHP support multiple inheritance ?
	34. Association in Cakephp ?
	35. What is HMABT Has many and belongs to association cakephp.
	36. What is bind and live methods in Jquery and differences.
	37. How to call different file in different methods in cakephp.
	38. How to set variable for view in cakephp.
	39. What is post and pre increment.
	40. $i=6;
		echo $i++ + $++;
		echo $i;
		echo $i-- - $--;
		
	
	
*/
?>
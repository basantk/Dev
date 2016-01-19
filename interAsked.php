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
		Ans: Three .htaccess file in cakePHP.
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
	   O/P: 0123456789
	9.  What are array_merge and array_combine ?
		
	10. What is array_slice?
	11. What is in_array ?
	12. How to find a variable is int or string in PHP ?
	13. What is Abstract Class?Is abstract is protected?
	14. What is interface?
	15. What is Function ?
	16. What is Private and Protected ?
	17. What is Component in CakePhp ?
	18. What is Element in CakePHP ?
	19. What is ORM in CakePHP ?
	20. How to find Second highest Salary ?
	21. Difference between in JavaScript and Ajax ?
	22. Some Methods and events in JavaScript ?
	23. What is the use of Hooks in CI and CakePHP
	24. How to change the layout in cakePHP ?
	25. How to define Contact in PHP ?
	26. What is indexing ?
	27. What is primary key and foreign key.
	28. What is Session and Cookie, How to set the Session and cookie.
	29. What is SOAP and REST.and difference?
	30. What are Magic Method in PHP ?
	31. What is __call magic method ?how to call ?
	32. What is Constructor ?
	33. What is Inheritance?How many?dose PHP support multiple inheritance ?
	34. Association in CakePHP ?
		
	35. What is HMABT Has many and belongs to association cakePHP ?
	36. What is bind and live methods in jQuery and differences.
		Ans: 
			bind():-
			The bind method will only bind event handlers for currently existing items. That means this works for the current element.
			 bind is method and click is event.
			$('P').bind('click', function () {
                alert("Example of Bind Method");
                e.preventDefault();
            });  
			
			live():-
			The bind method can bind event handlers for currently existing items or future items.
			 $('P').live('click', function () {
                alert("Example of live method");
                e.preventDefault();
            });
	37. How to call different file in different methods in cakePHP.
		Ans: $this->render('path/of/file');
	38. How to set variable for view in cakePHP.
		Ans: $this->set('variablename',$value);
	39. What is post and pre increment.
			Post Increment is return a copy of original value
			Pre Increment return a copy of original value plus one.
	40. $i=6;
		echo $i++ + $i++;
		echo $i;
		echo $i-- - $i--;
	41. How to use class and objects.
		class xyz(){
			public function abc(){
				echo 'hello word';
			}
		}
		$obj=new xyz();
		echo $obj->abc();
		
	42. What is trigger and how to use in jQuery ?
		Ans: trigger method trigger the specific event and default behaviour of an event for selected elements.
			$("button").click(function(){
				$("input").trigger("select");
			});
			
	43. What is array_pop, array_push and array_shift, array_unshift ?
		Ans:	
			array_pop()-:  pop(remove) the elements from last position of the array.(remove one)
			array_push()-: push(add) one or more element at the end of the array. Note:Add one or More 
			array_shift(): array_shift shift(remove) the element off the beginning of the array. Note: remove only one elements
			array_unshift(): array_unshift(add) the element at the beginning of the array. Note: Add one or more elements
	44. What is Indexing in Mysql Database	 ?
		Ans: 
			Indexes are use to find rows with specific column value quickly.
			MySQL must begin with the first row and then read through the entire table to find the relevant rows.
			If the table has an index for the columns in question, MySQL can quickly determine the position to seek to in the middle of the data file without having to look at all the data.
			This is much faster than reading every row sequentially.

	
*/
?>
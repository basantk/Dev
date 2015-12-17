<?php 
	error_reporting(1);
	$con=mysql_connect('localhost','root','') or die('could not connect with database');
	if($con){
		mysql_select_db('a1registration',$con) or die('could not connect');
	}
?>
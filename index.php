<?php
include('dbconnect.php');
$ss=mysql_query('select * from clients');
$ss=mysql_fetch_row($ss);
print_r($ss);
 ?>
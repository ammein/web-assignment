<?php
 require_once('setting.php'); 
 require_once('variable.inc'); 
$hostname='localhost:3306';
$database='usermanage';
$userdb='root';
$passdb='';
$passwd='';
$format = 'json';
//all setting above is for you to connect to database
//below is to command for connection to db
$virtual_con=mysqli_connect($hostname,$userdb,$passwd,$database) or trigger_error(mysql_error(),E_USER_ERROR);




?>
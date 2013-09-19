<?php
//connect.php
$server = 'localhost';
$username = 'userpiezas';
$password = 'juanse';
$database = 'pieza';

if(!mysql_connect($server, $username, $password))
{
	exit('Error: could not establish database connection');
}
if(!mysql_select_db($database))
{
	exit('Error: coult not select the database');
}
?>

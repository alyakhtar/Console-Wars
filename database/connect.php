<?php
$sql='localhost';
$user='root';
$pass='samuraii';
$dbname='mydb';

if(!mysql_connect($sql,$user,$pass) || !mysql_select_db($dbname)){
	die(mysql_error());
}


?>
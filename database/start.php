<?php
require 'core.php';
require 'connect.php';

if(loggedin()){
	echo 'Youre logged in ';
}	else{
	include 'abc.php';
}
// echo $current_file;

?>

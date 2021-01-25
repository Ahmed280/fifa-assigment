<?php
$connect = new mysqli('localhost','root','','fifa');

if($connect->connect_error)
{
	echo "Connection Failed!";
}

?>
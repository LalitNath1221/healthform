<?php

$host= "localhost";
$username= "root";
$password = "";

$db_name = "db_health";

$conn = mysqli_connect($host, $username, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
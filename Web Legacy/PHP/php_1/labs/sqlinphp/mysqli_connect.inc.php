<?php

// database connection
$dbc = mysqli_connect("localhost","troy","","ctec127_lab4") OR
	die('<p>Could not connect to the MySQL server: ' . mysqli_connect_error() . '</p>');

// encoding
mysqli_set_charset($dbc,'utf8');

?>
<?php
include_once 'psl-config.php';   // As functions.php is not included
$mysql = mysql_connect(HOST, USER, PASSWORD, DATABASE);


// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>


<?php
    
//include the classes
define( "CLS_PATH", "class" );

include_once( CLS_PATH . "/user.php" );
	
	$mysql_hostname = "localhost";
	$mysql_user = "root";
	$mysql_password = "poo";
	$mysql_database = "login";
	$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password)
	or die("Opps some thing went wrong");
	mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");
	
	
	
	
	
	

	
?>
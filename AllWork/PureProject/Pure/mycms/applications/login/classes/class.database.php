<?php
class Database {
	
	

  public function __construct() 
  {
  	define("HOST", "localhost");     // The host you want to connect to.
  	define("USER", "root");    // The database username.
  	define("PASSWORD", "poo");    // The database password.
  	define("DATABASE", "simple_login");    // The database name.
  	
  	define("CAN_REGISTER", "any");
  	define("DEFAULT_ROLE", "users");
  	
  	define("SECURE", FALSE);    // FOR DEVELOPMENT ONLY!!!!
  	
  	
  	
  	$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
  }
}
?>


<?php
include("dbconfig.php");

if($_SERVER["REQUEST_METHOD"] == "POST")
{
// username and password sent from Form
$username=mysql_real_escape_string($_POST['username']);
$password=mysql_real_escape_string($_POST['password']);

$password=md5($password); // Encrypted Password

$sql="SELECT id FROM admin WHERE username='$username' and passcode='$password'";
$result=mysql_query($sql);
$count=mysql_num_rows($result);

// If result matched $username and $password, table row must be 1 row
if($count==1)
{
header("location: welcome.php");
}
else
{
$error="Your Login Name or Password is invalid";
}
}
?>

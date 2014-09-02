<?php

  session_start();
  
  include "classes/class.users.php";
  
  if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $users->login($username, $password);
  }
?>

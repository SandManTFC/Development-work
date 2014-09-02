<?php
  include "class.database.php";
  
  
  class Users extends Database {
  	
    public function login($username, $password) {
      $stmt = $this->mysqli->prepare("SELECT username, password FROM users WHERE username = ? AND password = ? LIMIT 1");
      $stmt->bind_param('ss', $username, $password);
      $stmt->execute();
      $stmt->bind_result($username, $password);
      $stmt->store_result();
      if($stmt->num_rows == 1) {
        while($stmt->fetch()) 
        {
          $_SESSION['username'] == $username;
          header("Location: dashboard.php");
         
        }
      } 
      else
      {
          return false;
      }
     
      $stmt->close();
      $stmt->free_result();
    }
  }
  $users = new users();
 
?>

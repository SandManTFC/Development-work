
<!DOCTYPE html>
<html lang="en">

<head>
<title>SimpleCMS</title>
</head>

<body>
<?php

  include_once('class/simpleCMS.php');
  $obj = new simpleCMS();
  $obj->host = 'localhost';
  $obj->username = 'root';
  $obj->password = 'poo';
  $obj->table = 'testDB';
  $obj->connect();

  if ( $_POST )
    $obj->write($_POST);

  echo ( $_GET['admin'] == 1 ) ? $obj->display_admin() : $obj->display_public();

?>
</body>

</html>
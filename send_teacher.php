<?php
require_once "functions.php";
  $name=$_POST[safety_request("Name")];
  $surname=$_POST[safety_request("Surname")];
  $id=$_POST[safety_request("classid")];

  $connection=mysqli_connect('localhost', 'root', '', 'Users');
  mysqli_set_charset($connection, "utf8");
  $query="INSERT INTO `ClassTeacher` (`Name`, `Surname`, `classid`) VALUES ('$name', '$surname', '$id')";
  $result=mysqli_query($connection,$query);
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  mysqli_close($connection);
?>

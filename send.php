<?php
require_once "functions.php";
  $name=$_POST[safety_request("Name")];
  $surname=$_POST[safety_request("Surname")];
  $class=$_POST[safety_request("Class")];
  $rate=$_POST[safety_request("Rate")];
  $image=$_POST["image"];

  $connection=mysqli_connect('localhost', 'root', '', 'Users');
  mysqli_set_charset($connection, "utf8");
  $query="INSERT INTO `Student` (`Name`, `Surname`, `Class`, `Average`, `image` ) VALUES ('$name', '$surname', '$class', '$rate', '$image')";
  $result=mysqli_query($connection,$query);
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  mysqli_close($connection);
?>

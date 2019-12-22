<?php
  require_once "functions.php";
  $id=$_POST['classid'];
  $newid=$_POST['newclassid'];
  $name=$_POST['Name'];
  $surname=$_POST['Surname'];
  $info=get_info_teacher();
  $connection=mysqli_connect('localhost', 'root', '', 'Users');
  mysqli_set_charset($connection, "utf8");
  $query="UPDATE `ClassTeacher` SET Name='$name', Surname='$surname', classid='$newid' WHERE classid=$id";
  $result=mysqli_query($connection,$query);
  echo mysqli_error($connection);
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  mysqli_close($connection);
?>

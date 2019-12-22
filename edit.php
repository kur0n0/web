<?php
  require_once "functions.php";
  $number=$_POST['Number'];
  $number=$number-1;
  $name=$_POST['Name'];
  $surname=$_POST['Surname'];
  $clas=$_POST['Class'];
  $rate=$_POST['Rate'];
  $info=get_info();
  $id=$info[$number]['id'];
  $image=$_POST['image'];
  $connection=mysqli_connect('localhost', 'root', '', 'Users');
  if(!$connection){
    echo "Error with connection DB";
  }
  mysqli_set_charset($connection, "utf8");
  $query="UPDATE `Student` SET Name='$name', Surname='$surname', Class='$clas', Average='$rate', image='$image' WHERE id=$id";
  $result=mysqli_query($connection,$query);
  echo mysqli_error($connection);
  header("Location: ".$_SERVER["HTTP_REFERER"]);
  mysqli_close($connection);
?>

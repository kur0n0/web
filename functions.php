<?php
  function safety_request($str){
    $str=trim($str);
    $str=stripslashes($str);
    $str=htmlspecialchars($str);
    return $str;
  }

  function get_info(){
    $connection=mysqli_connect('localhost', 'root', '', 'Users');
    mysqli_set_charset($connection, "utf8");
    $query="SELECT * FROM `Student`";
    $result=mysqli_query($connection,$query);
    $info=mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($connection);
    return $info;
  }

  function get_info_teacher(){
    $connection=mysqli_connect('localhost', 'root', '', 'Users');
    mysqli_set_charset($connection, "utf8");
    $query="SELECT * FROM `ClassTeacher`";
    $result=mysqli_query($connection,$query);
    $info=mysqli_fetch_all($result, MYSQLI_ASSOC);
    mysqli_close($connection);
    return $info;
  }

  function delete($id){
    $connection=mysqli_connect('localhost', 'root', '', 'Users');
    mysqli_set_charset($connection, "utf8");
    $query="DELETE FROM `Student` WHERE id=$id";
    mysqli_query($connection,$query);
    mysqli_close($connection);
  }

  function delete_teacher($id){
    $connection=mysqli_connect('localhost', 'root', '', 'Users');
    mysqli_set_charset($connection, "utf8");
    $query="DELETE FROM `ClassTeacher` WHERE classid=$id";
    mysqli_query($connection,$query);
    mysqli_close($connection);
  }
?>

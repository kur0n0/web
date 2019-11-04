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
    return $info;
    mysqli_close($connection);
  }
?>

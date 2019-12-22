<?php
  require_once "functions.php";
  session_start();
  $is_log=False;

    if(isset($_POST[safety_request("login")]) && isset($_POST[safety_request("password")])){
      $login=$_POST[safety_request("login")];
      $password=md5($_POST[safety_request("password")]. "sadljfhlh");
      $connection=mysqli_connect('localhost', 'root', '', 'Users');
      mysqli_set_charset($connection, "utf8");
      $query="SELECT * FROM `Users`";
      $result=mysqli_query($connection,$query);
      if($result){
        $info=mysqli_fetch_all($result, MYSQLI_ASSOC);
        $is_log=True;
        $_SESSION['userIsLoged']=$is_log;
        $_SESSION['id']=$info['id'];
        header('Location: profile.php');
      }else{
        echo "Нет совпадений";
      }
    }
   ?>

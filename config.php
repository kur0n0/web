<?php
  session_start();
  $is_log=False;

  $handle=@fopen('logins_and_passwords.txt' , 'r');
  $i=0;
  if($handle){
   while(!feof($handle)){
     $array[$i]["login"]=fgets($handle, 4096);
     $array[$i]["password"]=fgets($handle, 4096);
      $i++;
    }
    $quantity_array=count($array);
    for($i=0;$i<$quantity_array;$i++){
      $array[$i]["id"]=$i+1;
    }
    if (!feof($handle)) {
      echo "Конец файла или ошибка\n";
      }
    }
    array_pop($array);
    fclose($handle);
    // echo '<pre>';
    // print_r($array);
    // echo '</pre>';
    $login_b=False;
    $password_b=False;
    $tmp_login=0;
    $tmp_password=0;
    if(isset($_POST["login"]) && isset($_POST["password"])){
      $login=$_POST["login"];
      $password=md5($_POST["password"]. "sadljfhlh");
      for($i=0;$i<$quantity_array;$i++){
        if(isset($array[$i]["login"])){
          if((strcmp($array[$i]["login"], $login))==1){
            $login_b=True;
            $tmp_login=$i;
          }
        }
        if(isset($array[$i]["password"])){
          if((strcmp($array[$i]["password"], $password))==1){
            $password_b=True;
            $tmp_password=$i;
          }
        }
      }
     if($login_b==True && $password_b==True && $tmp_password==$tmp_login){
        $is_log=True;
        $_SESSION['userIsLoged']=$is_log;
        $_SESSION['id']=$tmp_login;
       header('Location: profile.php');
     }
     elseif($login_b==True){
       echo "Неверный пароль";
     }elseif ($tmp_login!=$tmp_password) {
       echo "Логин и пароль не соответствуют";
     }elseif ($login_b==False) {
       echo "Неверный логин";
     }
   }
   ?>

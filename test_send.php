<?php
    $dsn="mysql:host=localhost;dbname=test;charset=utf8";
    $opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo=new PDO($dsn,'root', '',$opt);
    $sql='SELECT login, password FROM `test` WHERE login =?';
    $login=$_POST['login'];
    $password=$_POST['password'];
    $parameter=array($login);
    $stmt=$pdo->prepare($sql);
    $stmt->execute($parameter);
    $info=$stmt->fetch();
    if($info){
         if($password===$info['password']){
             header('Location: admin.php');
         }else{
             echo "Error login or password";
         }
    }else{
        echo "Error login or password";
    }
    $pdo=null;
    $stmt=null;
?>

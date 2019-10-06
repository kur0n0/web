<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/css/materialize.min.css">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.0/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/my.js"></script>
    <link rel="stylesheet" href="css/main.css">
  </head>
  <!-- <body>
    <form method="post">
        <input type="text" name="login" placeholder="Введите логин"/><br/>
        <br/>
        <input type="password" name="password" placeholder="Введите пароль"><br/>
        <br/>
        <input type="submit" value="Войти" />
    </form>
  </body> -->
<body class="b-signup" ng-controller="RegisterCtrl" ng-app="myApp">
 <div class="container container-signup">
   <div id="signup">
      <div class="signup-screen">
         <div class="space-bot text-center">
            <h1 class="h-signup">Sign up</h1>
           <div class="divider"></div>
         </div>
           <form action="auth.php" class="form-register" method="post" name="register" novalidate>
             <div class="input-field col s6">
              <input id="email" type="email" name="login" ng-model="email" class="validate" required>
              <label class="active" for="email">Email</label>
             </div>
             <p class="alert alert-danger" ng-show="form-register.email.$error.email">Your email is invalid.</p>
             <div class="input-field col s6">
               <input id="password" type="password" name="password" ng-model="password" class="validate" required>
               <label class="active" for="password">Password</label>
              </div>
              <div class="space-top text-center">
                <button type="submit" ng-disabled="form-register.$invalid" class="waves-effect waves-light btn done">
                  <i class="material-icons left">done</i> Done
                </button>
              </div>
             </form>
           </div>
        </div>
    </div>
    <?php
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
  </body>
</html>

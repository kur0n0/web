<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/my.js"></script>
  </head>
  <body>
       <!-- <form method="post">
           <input type="text" name="login" placeholder="Введите логин"/><br/>
           <br/>
           <input type="password" name="password" placeholder="Введите пароль"><br/>
           <br/>
           <input type="submit" value="Войти" />
       </form> -->
      </form>
      <div class="bg bg-dark">
        <form>
            <div class="form-group mt-4">
              <label class="text-light pt-2 pl-3" for="exampleInputEmail1">Почта</label>
              <input type="email" name="login" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Введите почту">
            </div>
            <div class="form-group mt-4">
              <label class="text-light pt-2 pl-3" for="exampleInputPassword1">Пароль</label>
              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Введите пароль">
            </div>
            <div class="container-button">
              <button type="submit" class="btn btn-secondary mx-auto">Войти</button>
            </div>
        </form>
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

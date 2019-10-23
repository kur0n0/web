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
  <?php require_once "navbar.php"; ?>
<body class="b-signup" ng-controller="RegisterCtrl" ng-app="myApp">
 <div class="container container-signup">
   <div id="signup">
      <div class="signup-screen">
         <div class="space-bot text-center">
            <h1 class="h-signup">Вход</h1>
           <div class="divider"></div>
         </div>
         <?php if(isset($_SESSION['try'])) : ?>
           <div class="alert alert-danger">
             <p>Чтобы просматривать личную информацию пожалуйста авторизуйтесь!</p>
           </div>
          <?php  UnSet($_SESSION['try']); ?>
         <?php endif; ?>
           <form action="config.php" class="form-register" method="post" name="register" novalidate>
             <div class="input-field col s6">
              <input id="email" type="email" name="login" ng-model="email" class="validate" required>
              <label class="active" for="email">Адрес электронной почты</label>
             </div>
             <p class="alert alert-danger" ng-show="form-register.email.$error.email">Неверный адрес электронной почты</p>
             <div class="input-field col s6">
               <input id="password" type="password" name="password" ng-model="password" class="validate" required>
               <label class="active" for="password">Пароль</label>
              </div>
              <div class="space-top text-center">
                <button type="submit" ng-disabled="form-register.$invalid" class="waves-effect waves-light btn done">
                  <i class="material-icons left">done</i> Войти
                </button>
              </div>
             </form>
           </div>
        </div>
    </div>
  </body>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
  <?php require_once "footer.php"; ?>
</html>

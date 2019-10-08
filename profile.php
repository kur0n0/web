<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Профиль</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </head>
  <body>
    <?php require_once "navbar.php";
      if(isset($_SESSION['userIsLoged'])){
      $connection=mysqli_connect('localhost', 'root', '', 'Users');
      if(!$connection){
        die('Ошибка соединения: '.mysqli_error());
      }
      // $sql = "CREATE TABLE MyGuests (
      // id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
      // Name VARCHAR(30) NOT NULL,
      // Surname VARCHAR(30) NOT NULL,
      // Description TEXT
      // )";
      // if (mysqli_query($connection, $sql)) {
      //   echo "Таблица MyGuests создана успешно";
      // } else {
      //    echo "Ошибка создания таблицы: " . mysqli_error($connection);
      // }
      $query="SELECT * FROM `MyGuests`";
      $result=mysqli_query($connection, $query);
      if((mysqli_num_rows($result))>0){
        while($row=mysqli_fetch_assoc($result)){
          print_r($row);
        }
        mysqli_free_result($result);
      }
      mysqli_close($connection);
    }else {
      // echo "<h1>Пожалуйста авторизируйтесь!</h1>";
      $_SESSION['try']=true;
      header('Location: auth.php');
    }
    ?>
  </body>
</html>

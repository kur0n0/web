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
      $id=$_SESSION['id']+1;
      $query="SELECT * FROM `Personal data` WHERE id=$id";
      mysqli_set_charset($connection, "utf8");
      $result=mysqli_query($connection, $query);
      if((mysqli_num_rows($result))>0){
        while($row=mysqli_fetch_assoc($result)){
          $name=$row['Name'];
          $surname=$row['Surname'];
          $description=$row['Description'];
          $link_img=$row['Link'];
        }
        mysqli_free_result($result);
      }
      echo "<p><img max-width='50%' height='600' src='$link_img'></p>";
      echo "<p><strong>Имя: </strong>$name</p>";
      echo "<p><strong>Фамилия: </strong>$surname</p>";
      echo "<p><strong>Описание: </strong>$description</p>";

      if($id==1){
        $query_rating="SELECT * FROM `Rating` WHERE id=$id";
        $result_rating=mysqli_query($connection, $query_rating);
        if((mysqli_num_rows($result_rating))>0){
          while($row=mysqli_fetch_assoc($result_rating)){
            $name=$row['Name'];
            $surname=$row['Surname'];
            $math=$row['Math'];
            $programming=$row['Programming'];
            $social=$row['Social'];
          }
          echo "<h2>Итоговые оценки:</h2>";
          echo "<p><strong>Математика: </strong>$math</p>";
          echo "<p><strong>Программирование: </strong>$programming</p>";
          echo "<p><strong>Обществознание: </strong>$social</p>";
          mysqli_free_result($result_rating);
        }
      }
      if($id==2){
        $query_comment="SELECT * FROM `Comment` Where id=$id";
        $result_comment=mysqli_query($connection, $query_comment);
        if((mysqli_num_rows($result_comment))>0){
          while($row=mysqli_fetch_assoc($result_comment)){
            $teacher=$row['Teacher'];
            $comment=$row['Comment'];
          }
          echo "<h2>Замечания</h2>";
          echo "<p><strong>ФИО учителя </strong>$teacher</p>";
          echo "<p><strong>Описание </strong>$comment</p>";
        }
      }
          mysqli_close($connection);
    }else {
      $_SESSION['try']=true;
      header('Location: auth.php');
    }
    ?>
  </body>
  <?php require_once "footer.php"; ?>
</html>

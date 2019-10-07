<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Учителя</title>
</head>

<body>
  <?php
    require_once "navbar.php";
    ?>
  <h1 class="title">Учителя</h1>
  <section class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="img/teacher-1.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Гришин Абрам Игоревич учитель по обществознанию.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="img/teacher-2.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Киселёва Цветана Артемовна учительница по математике.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
          <img class="card-img-top" src="img/teacher-3.jpg" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Афанасьев Тимофей Константинович учитель по информатике.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
    <?php require_once "footer.php" ?>
</body>

</html>

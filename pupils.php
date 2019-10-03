<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Ученики</title>
</head>

<body>
  <?php
    require_once "navbar.php";
    ?>
  <h1 class="title">Список учеников</h1>
  <div class="container">
  <section class="container-tb">
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Фамилия</th>
          <th scope="col">Имя</th>
          <th scope="col">Отчество</th>
          <th scope="col">Класс</th>
          <th scope="col">Средний балл по всем предметам</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Лапин</td>
          <td>Роберт</td>
          <td>Эльдарович</td>
          <td>10</td>
          <td>3.7</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Чернов</td>
          <td>Май</td>
          <td>Сергеевич</td>
          <td>3</td>
          <td>4.5</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Устинов</td>
          <td>Гурий</td>
          <td>Макарович</td>
          <td>8</td>
          <td>4.1</td>
        </tr>
      </tbody>
    </table>
  </section>
</div>
  <footer class="container">

  </footer>
</body>

</html>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Расписание звонков</title>
</head>

<body>
  <?php
    require_once "navbar.php";
    ?>
  <h1 class="title">Расписание звонков</h1>
  <div class="container">
  <section class="container-tb">
    <table class="table pb-3">
      <thead class="thead-dark">
        <tr>
          <th scope="col">№ Урока</th>
          <th scope="col">Первая смена</th>
          <th scope="col">Перемена</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1 урок</th>
          <td>8.00-8.40</td>
          <td>10 минут</td>
        </tr>
        <tr>
          <th scope="row">2 урок</th>
            <td>8.50-9.30</td>
            <td>20 минут</td>
        </tr>
        <tr>
          <th scope="row">3 урок</th>
            <td>9.50-10.30</td>
            <td>20 минут</td>
        </tr>
        <tr>
          <th scope="row">4 урок</th>
            <td>10.50-11.30</td>
            <td>10 минут</td>
        </tr>
        <tr>
          <th scope="row">5 урок</th>
            <td>11.40-12.20</td>
            <td>10 минут</td>
        </tr>
        <tr>
          <th scope="row">6 урок</th>
            <td>12.30-13.10</td>
            <td>10 минут</td>
        </tr>
      </tbody>
    </table>
  </section>
  <section class="container-tb">
    <table class="table pb-3">
      <thead class="thead-dark">
        <tr>
          <th scope="col">№ Урока</th>
          <th scope="col">Вторая смена</th>
          <th scope="col">Перемена</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1 урок</th>
          <td>14.00-14.40</td>
          <td>10 минут</td>
        </tr>
        <tr>
          <th scope="row">2 урок</th>
            <td>14.00-14.40</td>
            <td>20 минут</td>
        </tr>
        <tr>
          <th scope="row">3 урок</th>
            <td>14.50-15.30</td>
            <td>20 минут</td>
        </tr>
        <tr>
          <th scope="row">4 урок</th>
            <td>16.50-17.30</td>
            <td>10 минут</td>
        </tr>
        <tr>
          <th scope="row">5 урок</th>
            <td>17.40-18.20</td>
            <td>10 минут</td>
        </tr>
        <tr>
          <th scope="row">6 урок</th>
            <td>18.30-19.30</td>
            <td>10 минут</td>
        </tr>
      </tbody>
    </table>
  </section>
</div>
  <?php require_once "footer.php" ?>
</body>

</html>

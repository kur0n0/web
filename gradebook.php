<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Журнал посещаемости</title>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/my.js"></script>
</head>

<body>
  <?php
    require_once "navbar.php";
    ?>
    </div>
  </nav>
  <h1 class="title">Журнал посещаемости</h1>
  <div class="container">
    <ul class="nav nav-pills" role="tablist">
      <li><a id="click" class="mar" href="#day-1" role="tab" data-toggle="pill">Первый день</a></li>
      <li><a class="mar" href="#day-2" role="tab" data-toggle="pill">Второй день</a></li>
      <li><a class="mar" href="#day-3" role="tab" data-toggle="pill">Третий день</a></li>
    </ul>
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade" id="day-1">
        <section class="container-tb">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">№</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Инициалы</th>
                    <th scope="col">Присутствие</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>02.09.19</td>
                    <td>Лапин.Р.Э</td>
                    <td>да</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>02.09.19</td>
                    <td>Чернов.М.С</td>
                    <td>нет</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>02.09.19</td>
                    <td>Устинов.Г.М</td>
                    <td>нет</td>
                  </tr>
                </tbody>
              </table>
            </section>
      </div>
      <div role="tabpanel" class="tab-pane active fade in" id="day-2">
        <section class="container-tb">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">№</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Инициалы</th>
                    <th scope="col">Присутствие</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>03.09.19</td>
                    <td>Лапин.Р.Э</td>
                    <td>нет</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>03.09.19</td>
                    <td>Чернов.М.С</td>
                    <td>нет</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>03.09.19</td>
                    <td>Устинов.Г.М</td>
                    <td>да</td>
                  </tr>
                </tbody>
              </table>
            </section>
      </div>
      <div role="tabpanel" class="tab-pane active fade in" id="day-3">
        <section class="container-tb">
              <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">№</th>
                    <th scope="col">Дата</th>
                    <th scope="col">Инициалы</th>
                    <th scope="col">Присутствие</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>04.09.19</td>
                    <td>Лапин.Р.Э</td>
                    <td>да</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>04.09.19</td>
                    <td>Чернов.М.С</td>
                    <td>да</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>04.09.19</td>
                    <td>Устинов.Г.М</td>
                    <td>да</td>
                  </tr>
                </tbody>
              </table>
            </section>
      </div>
    </div>
  </div>
  <?php require_once "footer.php" ?>
</body>

</html>

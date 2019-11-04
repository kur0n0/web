<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
      function isNumeric(num){
        return isNaN(num);
      }

      function validate(form){
        var fail=false;
        var name=form.Name.value;
        var surname=form.Surname.value;
        var clas=form.Class.value;
        var rate=form.Rate.value;
        if(name=="" || name==" "){
           fail="Вы не ввели имя";
        } else if (surname=="" || surname==" "){
          fail="Вы не ввели фамилию";
        }else if (isNumeric(clas)){
          fail="Введите класс";
        }else if(isNumeric(rate)){
          fail="Введите оценку";
        }
        if(fail){
          alert(fail);
        }
      }
    </script>
  </head>
<body>
  <?php
  require_once "navbar.php";
    ?>
  <h1>Таблица учеников</h1>
  <div class="container">
    <table class="table table-striped table-pupils">
      <thead class="thead-dark">
        <tr>
          <th scope="col">#</th>
          <th scope="col">Имя</th>
          <th scope="col">Фамилия</th>
          <th scope="col">Класс</th>
          <th scope="col">Средняя оценка</th>
        </tr>
      </thead>
      <?php
        $i=0;
        $info=get_info();
        foreach($info as $info): $i++;
      ?>
      <tbody>
        <tr>
          <th scope="row"><?=$i?></th>
          <td><?=$info['Name']?></td>
          <td><?=$info['Surname']?></td>
          <td><?=$info['Class']?></td>
          <td><?=$info['Average']?></td>
        </tr>
      </tbody>
    <?php endforeach; ?>
    </table>
  </div>
  <div class="container-signup mx-auto">
    <div class="signup-screen container">
      <form method="post" action="send.php" onsubmit="validate(this)">
        <div class="form-group">
          <label for="exampleFormControlInput1">Имя</label>
          <input name="Name" class="form-control" id="Name" placeholder="Имя">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Фамилия</label>
          <input name="Surname" class="form-control in-bg" id="Surname" placeholder="Фамилия">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Класс</label>
          <input name="Class" class="form-control" id="Clas" placeholder="Класс">
        </div>
        <div class="form-group">
          <label for="exampleFormControlInput1">Оценка</label>
          <input name="Rate" class="form-control" id="Rate" placeholder="Оценка">
        </div>
        <div class="text-center pb-3">
          <button type="submit" class="btn btn-secondary">Отправить</button>
        </div>
      </form>
    </div>
  </div>
</body>
  <?php
  require_once "footer.php";
  ?>
</html>

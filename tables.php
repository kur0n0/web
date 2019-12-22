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

      function isClass(num){
        b=true;
        if(num>0 && num<12){
          b=false;
        }
        return b;
      }

      function isRate(num){
        b=true;
        if(num>1 && num<5){
          b=false;
        }
        return b;
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
          if(isClass(clas)){
            fail="Введите класс от 1 до 11";
          }
        }else if(isNumeric(rate)){
          if(isRate(rate)){
            fail="Введите оценку от 2 до 5";
          }
        }
        if(fail){
          alert(fail);
        }
      }

      function validate_send_teacher(form){
        var fail=false;
        var name=form.Name.value;
        var surname=form.Surname.value;
        var id=form.classid.value;
        if(name=="" || name==" "){
          fail="Вы не ввели имя";
        }else if (surname=="" || surname==" "){
          fail="Вы не ввели фамилию";
        }else if (isNumeric(id)){
          if(isClass(id)){
            fail="Введите класс от 1 до 11";
          }
        }
        if(fail){
          alert(fail);
        }
      }

      function validate_edit(form){
        var fail=false;
        var number=form.Number.value;
        var name=form.Name.value;
        var surname=form.Surname.value;
        var clas=form.Class.value;
        var rate=form.Rate.value;
        if(name=="" || name==" "){
           fail="Вы не ввели имя";
        } else if (surname=="" || surname==" "){
          fail="Вы не ввели фамилию";
        }else if (isNumeric(clas)){
          if(isClass(clas)){
            fail="Введите класс от 1 до 11";
          }
        }else if(isNumeric(rate)){
          if(isRate(rate)){
            fail="Введите оценку от 2 до 5";
          }
        }else if (isNumeric(number)){
          fail="Введите номер";
        }
        if(fail){
          alert(fail);
        }
      }

      function validate_edit_teacher(form){
        var fail=false;
        var id=form.classid.value;
        var name=form.Name.value;
        var surname=form.Surname.value;
        if(name=="" || name==" "){
           fail="Вы не ввели имя";
        } else if (surname=="" || surname==" "){
          fail="Вы не ввели фамилию";
        }else if (isNumeric(id)){
          if(isClass(id)){
            fail="Введите класс от 1 до 11";
          }
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
            <th scope="col">Фотография</th>
          <th scope="col">Удалить</th>
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
            <td><img class="pic" src="img/<?=$info['image']?>"></td>
          <td><a href="?delete=<?=$info['id']?>"><i class="fas fa-trash"></i></a></td>
        </tr>
      </tbody>
    <?php endforeach;
    ?>
    </table>
    <?php
    if(isset($_GET['delete'])){
      $id=$_GET['delete'];
      delete($id);
    }
    ?>
  </div>
  <div class="row addObject center-block">
    <div class="col-6">
      <div class="container-signup">
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
              <div class="form-group">
                  <label for="exampleFormControlInput1">Название файла</label>
                  <input name="image" class="form-control" id="image" placeholder="Название файла">
              </div>
            <div class="text-center pb-3">
              <button type="submit" class="btn btn-secondary">Отправить</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="container-signup">
        <div class="signup-screen container">
          <form method="post" action="edit.php" onsubmit="validate_edit(this)">
            <div class="form-group">
              <label for="exampleFormControlInput1">Номер в таблице</label>
              <input name="Number" class="form-control" id="Number" placeholder="Номер в таблице">
            </div>
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
              <div class="form-group">
                  <label for="exampleFormControlInput1">Название файла</label>
                  <input name="image" class="form-control" id="image" placeholder="Название файла">
              </div>
            <div class="text-center pb-3">
              <button type="submit" class="btn btn-secondary">Отправить</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <table class="table table-striped table-pupils">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Номер класса</th>
          <th scope="col">Имя</th>
          <th scope="col">Фамилия</th>
          <th scope="col">Удалить</th>
        </tr>
      </thead>
      <?php
        $info_teacher=get_info_teacher();
        foreach($info_teacher as $info_teacher):
      ?>
      <tbody>
        <tr>
            <th scope="row"><?=$info_teacher['classid']?></th>
          <td><?=$info_teacher['Name']?></td>
          <td><?=$info_teacher['Surname']?></td>
          <td><a href="?delete=<?=$info_teacher['classid']?>"><i class="fas fa-trash"></i></a></td>
        </tr>
      </tbody>
    <?php endforeach; ?>
    </table>
    <?php
    if(isset($_GET['delete'])){
      $id=$_GET['delete'];
      delete_teacher($id);
    }
    ?>
  </div>
  <div class="row addObject center-block">
    <div class="col-6">
      <div class="container-signup">
        <div class="signup-screen container">
          <form method="post" action="send_teacher.php" onsubmit="validate_send_teacher(this)">
            <div class="form-group">
              <label for="exampleFormControlInput1">Номер класса</label>
              <input name="classid" class="form-control" id="classid" placeholder="Номер класса">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Имя</label>
              <input name="Name" class="form-control" id="Name" placeholder="Имя">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Фамилия</label>
              <input name="Surname" class="form-control in-bg" id="Surname" placeholder="Фамилия">
            </div>
            <div class="text-center pb-3">
              <button type="submit" class="btn btn-secondary">Отправить</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-6">
      <div class="container-signup">
        <div class="signup-screen container">
          <form method="post" action="edit_teacher.php" onsubmit="validate_edit_teacher(this)">
            <div class="form-group">
              <label for="exampleFormControlInput1">Номер класса</label>
              <input name="classid" class="form-control" id="classid" placeholder="Номер текущего класса">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Номер нового класса</label>
              <input name="newclassid" class="form-control" id="newclassid" placeholder="Номер ноого класса">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Имя</label>
              <input name="Name" class="form-control" id="Name" placeholder="Имя">
            </div>
            <div class="form-group">
              <label for="exampleFormControlInput1">Фамилия</label>
              <input name="Surname" class="form-control in-bg" id="Surname" placeholder="Фамилия">
            </div>
            <div class="text-center pb-3">
              <button type="submit" class="btn btn-secondary">Отправить</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>
  <?php
  require_once "footer.php";
  ?>
</html>

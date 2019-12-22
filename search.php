<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Поиск</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/main.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
<?php require_once "navbar.php"; ?>
<nav class="navbar navbar-light bg-light">
    <form class="form-inline" method="get">
        <input name="search" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button name="click" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
</nav>
<?php
    if(isset($_GET['click']) && $_GET['search']!='') {
        $search = $_GET['search'];
        $connection = mysqli_connect('localhost', 'root', '', 'Users');
        if (!$connection) {
            echo "Error with connection DB";
        }
        mysqli_set_charset($connection, "utf8");
        $query = "SELECT * FROM `Student` WHERE Class LIKE '%$search%'";
        $result = mysqli_query($connection, $query);
        $info=mysqli_fetch_all($result, MYSQLI_ASSOC);
        if ($info){?>
            <div class="container">
                <div class="row">
            <?php foreach ($info as $value):?>
                    <div class="col-4">
                        <div class="card">
                            <img class="card-img-top" src="img/<?=$value['image']?>">
                            <div class="card-body">
                                <p class="card-text">Имя: <?=$value['Name']?></p>
                                <p class="card-text">Фамилия:<?=$value['Surname']?></p>
                                <p class="card-text">Класс: <?=$value['Class']?></p>
                                <p class="card-text">Средняя оценка: <?=$value['Average']?></p>
                            </div>
                        </div>
                    </div>
        <?php endforeach; ?>
                </div>
            </div>
        <?php mysqli_close($connection);
        }else{
            echo "Нет совпадений";
        }
    }elseif((isset($_GET['click'])) && empty($_GET['search'])){
        echo "Введите запрос";
    }
?>
</body>

</html>

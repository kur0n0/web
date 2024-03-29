<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Главная</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>

<body>
  <?php
      require_once "navbar.php";
    ?>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="container-fluid slider">
      <div class="carousel-inner">
        <div class="carousel-item single-filter-content content-1 active"></div>
        <div class="carousel-item single-filter-content content-2"></div>
        <div class="carousel-item single-filter-content content-3"></div>

      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <section class="container">
    <h1>Основные сведения</h1>
      <!-- <p>Муниципальное общеобразовательное учреждение «Лицей № 9 имени заслуженного учителя школы Российской Федерации А.Н. Неверова Дзержинского района Волгограда»</p>
      <p>Адрес: 400137, г. Волгоград, ул. 8-й Воздушной Армии, 26 а.</p>
      <p>Дни работы: Понедельник-пятница: 8:00-19:00, суббота: 8:00-14:00.</p>
      <p>Выходные: воскресенье и праздничные дни.</p> -->
      <p><strong>Название образовательного учреждениямуниципальное общеобразовательное учреждение: </strong>«Лицей № 9 имени заслуженного учителя школы Российской Федерации А.Н. Неверова Дзержинского района Волгограда»</p>
      <p><strong>Тип: </strong>Бюджетное учреждение</p>
      <p><strong>Организационно-правовая форма: </strong>Муниципальное учреждение</p>
      <p><strong>ФИО руководителя вышестоящего органа управления образования или учредителя: </strong>Мукашева Ирина Викторовна, начальник Дзержинского территориального управления департамента по образованию администрации Волгограда</p>
      <p><strong>Телефон руководителя вышестоящего органа управления образования или учредителя: </strong>+7-(8442)-91-33-76</p>
      <p><strong>Директор лицея: </strong>Жигульская Ирина Викторовна</p>
      <p><strong>Телефон директора :</strong>	+7-(8442)-53-63-98</p>
      <p><strong>Сайт Лицея: </strong>school.com</p>
      <p><strong>Адрес лицея: </strong>400137, г. Волгоград, ул. 8-й Воздушной Армии, 26 А. Лицей филиалов не имеет.</p>
      <p><strong>Адрес электронной почты: </strong><a href="mailto:school@gmail.com">school@gmail.com</a>. Также свои вопросы, обращения, предложения по улучшению работы вы можете направлять через Интернет-приёмную</p>
      <p><strong>Режим и график работы лицея: </strong>Понедельник-пятница: 8:00-19:00. Выходные: суббота, воскресенье и праздничные дни.</p>
  </section>

</body>
<?php require_once "footer.php"; ?>
</html>

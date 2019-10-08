<?php require_once "config.php"; ?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index.php">Liceum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item"><a class="nav-link text-light" href="pupils.php">Ученики</a></li>
      <li class="nav-item"><a class="nav-link text-light" href="teachers.php">Учителя</a></li>
      <li class="nav-item"><a class="nav-link text-light" href="timetable.php">Расписание звонков</a></li>
      <li class="nav-item"><a class="nav-link text-light" href="gradebook.php">Журнал посещаемости</a></li>
    </ul>
    <ul class="navbar-nav mr-10px">
      <?php if(isset($_SESSION['userIsLoged'])) : ?>
        <li class="nav-item"><a class="nav-link text-light" href="profile.php">Мой профиль</a></li>
        <li class="nav-item"><a class="nav-link text-light" href="logout.php">Выход</a></li>
      <?php else : ?>
        <li class="nav-item"><a class="nav-link text-light" href="auth.php">Вход</a></li>
      <?php endif; ?>
    </ul>
  </div>
</nav>

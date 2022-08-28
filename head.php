<head>
<?php
session_start();
?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>сайт</title>
    <ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="#">Главная</a>
  </li>
  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Профиль</a>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="registr.php">Регистрация</a></li>
      <li><a class="dropdown-item" href="enter.php">Вход</a></li>
    </ul>
  </li>
  <?php if (isset($_SESSION["user"])) { ?> 
  <li class="nav-item">
    <a class="nav-link active" href="logout.php" tabindex="-1" aria-disabled="true">Выход</a>
  </li>
  <?php  } ?>
</ul>
    <picture>
  <source srcset="" type="image/svg+xml">
  <img src="https://shwethakrish.com/wp-content/uploads/2020/07/cropped-800px-ESO_-_Milky_Way.jpg" class="img-fluid img-thumbnail" alt="здесь могла быть ваша картинка">
</picture>
  </head>
<!doctype html>
<?php  
session_start(); 
?>
<html lang="en">
<body>
 <div class="container-fluid">
  <div class="row">


<div class="col-3">

<ul class="list-group">  
  <li class="list-group-item"><a class="nav-link" href="#">сентябрь 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">октябрь 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">ноябрь 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">декабрь 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">январь 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">февраль 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">март 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">апрель 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">май 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">июнь 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">июль 2020</a></li>
  <li class="list-group-item"><a class="nav-link" href="#">август 2020</a></li>

</ul>

</div>
<?php if (isset($_SESSION['user'])) {
echo $_SESSION['user'];}
?>
    <div class="col">
    <h2>БАУ</h2>
<picture><BR>
  <source srcset="" type="image/svg+xml">
  <img src="https://cs6.pikabu.ru/avatars/739/v739343-1366786558.jpg" class="img-thumbnail" alt="здесь могла быть ваша картинка"><h6 style="display: inline-block;">ПУШИСТЫЕ КОТЯТА ЭТО СЛУГИ СОТОНЫ</h6>
</picture><br>
<h6 style="display: inline-block;">аццкий сотона</h6>
<a href="/site/st1.php" target="_blank">Статья</a>
<h6>01.05.20</h6>
    </div>
    <div class="col">
    <h2>Файв</h2>
<picture><br>
  <source srcset="" type="image/svg+xml">
  <img src="https://i1.sndcdn.com/artworks-000059188613-lfqot9-large.jpg" class="img-thumbnail" alt="здесь могла быть ваша картинка"> <h6 style="display: inline-block;">ЭВРИБАДИ ГЕТ АП СИНГИН</h6>
</picture><br>
<h6 style="display: inline-block;">безпонтовый</h6>
<a href="/site/st2.php" target="_blank">Статья</a>
<h6>05.03.20</h6>
    </div>
  </div>
</div>

<header>



</header>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

  </body>
</html>
<?php
session_start();
print_r($_POST);
$s=1;
$mysql = new mysqli('localhost', 'root', '', 'lsite');
if (isset($_SESSION['user']) and isset($_POST['text'])) {
    $login = $_SESSION['user'];
    $sql = "SELECT * FROM user WHERE login = '$login'";
    $result = $mysql->query($sql);
    $user = $result->fetch_assoc();

    $username = $user['login'];
    $email = $user['email'];
    $text = $_POST['text'];
} else if (!isset($_SESSION['user']) and isset($_POST['text']))
{
    $username = $_POST['username'];
    $email = $_POST['email'];
    $text = $_POST['text'];
}

if (isset($_POST['text'])) {
    $sql = "INSERT INTO comment (`text`,`username`,`email`,`article_ID`) VALUES ('$text', '$username', '$email','$s')";
    $a=$mysql->query($sql);
    echo $a;
    echo "string";
    header('Location: /site/st1.php');
}
?>
<?php
$article_ID = 1;
$sql_comments = "SELECT * FROM comment WHERE article_ID = '$article_ID'";
$comments = $mysql->query($sql_comments)->fetch_all();
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

    <div class="col">
    <h2>БАУ</h2>
<picture><BR>
  <source srcset="" type="image/svg+xml">
  <img src="https://cs6.pikabu.ru/avatars/739/v739343-1366786558.jpg" class="img-thumbnail" alt="здесь могла быть ваша картинка">
  <p>Создания из Ада</p>
  <p>Проникают в нашу жизнь!</p>
<p>Пушистые котята - </p>
<p>Это слуги САТАНЫ!!!</p>
<p>Купи котёнка! Своему ребёнку!</p>
<p>Купи котёнка! Своему ребёнку!</p>
<p></p>
<p>Когда взойдёт кровавая луна</p>
<p>Мир окунётся в квинтэссенцию зла</p>
<p>Котята превратятся в адских тварей</p>
<p>И всем вам головы поотрывают!!!</p>
<p></p>
<p>Котята это слуги СА-ТА-НЫ!!!</p>
<p>У них уже есть волосатые хвосты!</p>
<p>Потом вырастут огромные рога,</p>
<p>Они засунут вам их в шоколадные глаза!!!</p>
<p></p>
<p>Купи котёнка! Своему ребёнку!</p>
<p>Купи котёнка! Своему ребёнку!</p>
<p></p>
<p>Когда взойдёт кровавая луна</p>
<p>Мир окунётся в квинтэссенцию зла</p>
<p>Котята превратятся в адских тварей</p>
<p>И всем вам головы поотрывают!!!</p>
<p></p>
</h6>
</picture><br>
<h6 style="display: inline-block;">аццкий сотона</h6>
<h6>01.05.20</h6>
<br>
<div>
<?php
    if ($comments) {
        foreach ($comments as $i => $comment) {
            $username = $comment[2];
            $email = $comment[3];
            $text = $comment[1];

            echo "<div class='card mt-2'>";
            echo "<div class='card-header'>";
            echo "Комментарий";
            echo "</div>";
            echo "<div class='card-body'>";
            echo "<blockquote class='blockquote mb-0'>";
            echo "<p>$username</p>";
            echo "<footer class='blockquote-footer'>$text</footer>";
            echo "</blockquote>";
            echo "</div>";
            echo "</div>";
        }
    }
?>
<hr>
</div>
<div class="mb-3">
<form action="/site/st1.php" method="post">
<?php if (!isset($_SESSION["user"])) { ?> 
  <label for="exampleFormControlInput1" class="form-label">имя</label>
  <input type="username" class="form-control-lg" id="exampleFormControlInput1" name="username">
  <label for="exampleFormControlInput1" class="form-label">Email адрес</label>
  <input type="email" class="form-control-lg" id="exampleFormControlInput1" name="email"><br>
<?php  } ?>

  <label for="exampleFormControlTextarea1" class="form-label">Текст комментария</label><br>
  <textarea class="form-control-lg" id="exampleFormControlTextarea1" rows="3" style="width: 70%" name="text"></textarea><br>
  <button type="submit">отправить</button>
  </form>
</div>
    </div>
  </div>
</div>
  </body>
</html>
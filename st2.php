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
    header('Location: /site/st2.php');
}
?>
<?php
$article_ID = 2;
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
    <h2>Файв</h2>
<picture><BR>
  <source srcset="" type="image/svg+xml">
  <img src="https://i1.sndcdn.com/artworks-000059188613-lfqot9-large.jpg" class="img-thumbnail" alt="здесь могла быть ваша картинка">
  <p>Everybody get up singing </p>
  <p>1,2,3,4,</p>
<p>Five will make you get down now</p>
<p>Everybody get up singing </p>
  <p>1,2,3,4,</p>
<p>Five will make you get down now</p>
<p></p>
<p>You gots to keep it real</p>
<p>You gots to keep it raw</p>
<p>I’m lyrically blessed so don’t try to ignore</p>
<p>Time for some action</p>
<p>Creeping up your back and</p>
<p>Keep the beat nasty like Janet my reaction</p>
<p>Hard I’m addictive</p>
<p>Better lock your kids in</p>
<p>Coming to your area ya don’t know what you’re missing</p>
<p>Go tell your family</p>
<p>Here comes the enemy</p>
<p>Blowing up the spot tech ramedy</p>
<p></p>
<p>Keep it moving on</p>
<p>Keep it moving on</p>
<p>Keep it move,</p>
<p>Keep it move,</p>
<p>Keep it moving on</p>
<p></p>
<p>I’ll be the resident president,</p>
<p>I’m the 5th element</p>
<p>Jimmy fly Snooka stone cold is how</p>
<p>I’m hittin' em' better get together,</p>
<p>Put your hands In the sky</p>
<p>Stick em up punk,</p>
<p>Hit em low hit em high</p>
<p>Now I’m the bad boy that you invite for dinners</p>
<p>Ain’t got no manners cause I eat with my fingers</p>
<p>Lost boys terrorise the neighborhood</p>
<p>And hounds of the Baskerville will be up no good</p>
<p>So come on come on everybody keep checking us</p>
<p>Coming with the funk, bring it on wickedness</p>
<p></p>
<p>Everybody better recognise,</p>
<p>We got the funky rhymes</p>
<p>Keep it together,</p>
<p>Baby don’t even try to organise</p>
<p>We be the roughnecks</p>
<p>No concept</p>
<p>No business</p>
<p>We here to get down and make em grab your biscuits</p>
<p>So everybody, anybody, somebody</p>
<p>Put your hands together represent like John Gotte</p>
<p>Paragraph after Grammar for Gas</p>
<p>The Party’s Armageddon hit em with the heavy class</p>
<p>I’m bugging,</p>
<p>Hitting with the hooligan bamn</p>
<p>I know you wanna stand up,so baby jump</p>
</h6>
</picture><br>
<h6 style="display: inline-block;">ЭВРИБАДИ ГЕТ АП СИНГИН</h6>
<h6>05.03.20</h6>
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
</div>
<div class="mb-3">
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

  </body>
</html>
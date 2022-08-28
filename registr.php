<body>
<?php

if (isset($_POST['login']) and isset($_POST['password']) and isset($_POST['email'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $email = $_POST['email'];

    $mysql = new mysqli('localhost', 'root', '', 'lsite');
    $sql = "INSERT INTO user (`login`, `password`, `email`) VALUES ('$login', '$password',`$email`)";
    $mysql->query($sql);
    $mysql->commit();
    $mysql->close();
    header('Location: /site');
}
?>
<html>
<head>
    <title>Регистрация</title>
</head>
<body>
<h2>Регистрация</h2>
<form action="" method="post">
    <p>
        <label>Ваш логин:<br></label>
        <input name="login" type="login" size="15" maxlength="100">
    </p>
    <p>
        <label>Ваш пароль:<br></label>
        <input name="password" type="password" size="15" maxlength="100">
    </p>
  <p>
        <label>Ваш e-mail:<br></label>
        <input name="email" type="email" size="15" maxlength="100">
    </p>

    <p>
        <input type="submit" value="Присоединиться">
        <br>
    </p>
</form>


</body> 

</html>     




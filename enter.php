<?php
session_start();
if (isset($_SESSION['user']) == true) {
    header('Location: /site');
}
if (isset($_POST['login']) and isset($_POST['password'])) {
    $login = $_POST['login'];
    $password = $_POST['password'];

    $mysql = new mysqli('localhost', 'root', '', 'lsite');
    
    $sql = "SELECT * FROM user WHERE login = '$login' AND password = '$password'";
    $result = $mysql -> query($sql);

    $user = $result -> fetch_assoc();
    if (count($user) != 0) {
        $_SESSION['user'] = $user['login'];
        header('Location: /site');
    }
}
?>
<html>
<head>
    <title>Вход</title>
</head>
<body>
<h2>Вход</h2>
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
        <input type="submit" value="Присоединиться">
        <br>
    </p>
</form>
</body> 

</html>     
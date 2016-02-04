<?php
//Авторизован или нет.
//Проверка авторизации,
//если пользователь авторизован, то вывод ссылку на выход и переход на главную страницу админки
//если пользователь не авторизован, то вывести форму авторизации

//Подключение к БД
//session_start();
require_once("../database.php");


$sid = $_COOKIE["sid"];
//Весь код авторизации
//я хочу авторизоваться
if (isset($_POST['login'])) {
    $login = mysqli_real_escape_string($link, $_POST['login']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $result = mysqli_query($link, "SELECT  id FROM users WHERE login = '$login' AND password = '$password' ");

    if ($row = mysqli_fetch_assoc($result)) {

        $sid = md5(time() + $login);
        $result = mysqli_query($link, "INSERT INTO session( sid, user_id) VALUES ('$sid', " . $row["id"].")");
        setcookie("sid", $sid);
        $authorized = true;
        $user_id = $row["id"];
        header("Location: index.php");
    } else {
        //подключить шаблон авторизации с выводом сообщения неверная пара логин пароль
    }
} else {
    if ($sid != "") {
        //Проверяем авторизовался ли он ранее
        //запрос к таблице сессий. осущесвить проверку по полю sid
        $sid = mysqli_real_escape_string($link, $sid);
        $result = mysqli_query($link, "SELECT  user_id FROM session WHERE sid = '$sid' ");

        if ($row = mysqli_fetch_assoc($result)) {
            $authorized = true;
            $user_id = $row["user_id"];
            header("Location: index.php");
        }
    } else {
        //подключить шаблон авторизации (как буд-то первый раз открыл)
    }




}

?>
<html>
<head>
    <title>
        Авторизация в СТОТиС
    </title>
    <link rel="stylesheet" href="../admin/css/loging_style.css">
    <link rel="stylesheet" href="../admin/css/reset.css">
    <link rel="stylesheet" href="../admin/vendor/bootstrap/css/bootstrap.min.css">
    <script src="../admin/vendor/jquery-2.0.3.min.js"></script>
    <script src="../admin/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<form class="form-signin ajax" method="POST">
    <div class="main-error alert alert-error hide"></div>
    <h2 class="form-signin-heading">Добро пожаловать</h2>
    <input name="login" type="text" class="input-block-level" placeholder="Имя" autofocus>
    <input name="password" type="password" class="input-block-level" placeholder="Пароль">
    <input class="btn btn-large btn-primary" name="button" type="submit" value="Вход">
</form>
<div class="navbar navbar-fixed-bottom hidden-phone">
    <p class="pull-right">
        © 2016 СТОТиС </p>
    <a href="http://localhost/Blog/" target="_blank" class="pull-left"> Перейти на главную страницу сайта.</a>
</div>
</html>

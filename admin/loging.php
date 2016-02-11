<?php
$root_dir = __DIR__ . "/../";
$file_dir = __DIR__ . "/";
//Авторизован или нет.
//Проверка авторизации,
//если пользователь авторизован, то вывод ссылку на выход и переход на главную страницу админки
//если пользователь не авторизован, то вывести форму авторизации
//Подключение к БД
require_once($root_dir . "database.php");


//Весь код авторизации
//я хочу авторизоваться
if (isset($_POST['login'])) {
    $login = mysqli_real_escape_string($link, $_POST['login']);
    $password = mysqli_real_escape_string($link, $_POST['password']);
    $result = mysqli_query($link, "SELECT  id FROM users WHERE login = '$login' AND password = '$password' ");

    if ($row = mysqli_fetch_assoc($result)) {

        $sid = md5(time() + $login);
        $result = mysqli_query($link, "INSERT INTO session( sid, user_id) VALUES ('$sid', " . $row["id"] . ")");
        setcookie("sid", $sid);
        $authorized = true;
        $user_id = $row["id"];
        header("Location: index.php");
    } else {
        //подключить шаблон авторизации с выводом сообщения неверная пара логин пароль
        $message = "Неверная пара логин и пароль";
        require_once($file_dir . "loging_form.php");

    }
    // процедура выхода
} else {
    if (isset($_GET['logout'])) {

        if ($authorized) {
            close_session();
            $message = "Добро пожаловать";
            require_once($file_dir . "loging_form.php");
        }
    } else if ($authorized) {
        die("Вы уже автризовались");
    } else {
        $message = "Добро пожаловать";
        require_once($file_dir . "loging_form.php");

    }
}
?>


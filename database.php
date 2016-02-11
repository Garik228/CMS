<?php
define("MYSQL_SERVER", 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB', 'CMS');

$authorized = false;
$sid = "";
$user_id = 0;
$link = null;

//начало сессии
function begin_session()
{
    global $sid, $authorized, $user_id, $link;
    $authorized = false;
    $user_id = 0;
    $sid = $_COOKIE["sid"];
    if ($sid != "") {
        //Проверяем авторизовался ли он ранее
        //запрос к таблице сессий. осущесвить проверку по полю sid
        $psid = mysqli_real_escape_string($link, $sid);
        $result = mysqli_query($link, "SELECT  user_id FROM session WHERE sid = '$psid' ");

        if ($row = mysqli_fetch_assoc($result)) {
            $authorized = true;
            $user_id = $row["user_id"];
        }

    }
}

function close_session()
{
    global $sid, $authorized, $user_id, $link;
    $authorized = false;
    $user_id = 0;
    $sid = $_COOKIE["sid"];
    if ($sid != "") {
        $psid = mysqli_real_escape_string($link, $sid);
        $result = mysqli_query($link, "delete FROM session WHERE sid = '$psid' ");
        $user_id = 0;
    }
}

function db_connect()
{
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
    or die("Error: " . mysqli_error($link));
    if (!mysqli_set_charset($link, "utf8")) {
        printf("Error: " . mysqli_error($link));
    }

    return $link;
}

$link = db_connect();

begin_session();


?>
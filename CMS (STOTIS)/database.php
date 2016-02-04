<?php
define("MYSQL_SERVER", 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', '');
define('MYSQL_DB', 'CMS');

$authorized = false;
$sid = "";
$user_id = 0;

function db_connect(){
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
        or die("Error: ".mysql_error($link));
    if(!mysqli_set_charset($link, "utf8")){
        printf("Error: ".mysql_error($link));
    }
    
    return $link;
}

$link = db_connect();

?>
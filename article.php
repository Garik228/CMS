<?php
$dir= "./";
  require_once("database.php");
  require_once("models/func_articles.php");

  $link = db_connect();
  $articles = articles_get($link, $_GET['id']);
  
  include("views/tpl_articles.php");
?>
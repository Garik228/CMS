<?php
$dir= "./";
  require_once("database.php");
  require_once("models/func_categories.php");

  $link = db_connect();
  $articles = articles_of_category($link, $_GET['id']);
  include("views/tpl_articles.php");
?>

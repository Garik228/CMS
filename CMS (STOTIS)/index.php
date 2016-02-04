<?php
     require_once("database.php");
     require_once("models/func_categories.php");

       $link = db_connect();
       $categories = categories_all($link);
        $blogname = "My site";


       include("views/tpl_categories.php");
?>
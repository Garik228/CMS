<?php
     require_once("../database.php");
if (!$authorized) {
    header("Location: loging.php");
    exit();
}
    $title_icon = '<span class="icon-home-2"></span>';
    $title_form = 'Панель управления';
     require_once("../views/header.php");
     require_once("admin_panel.php");
     require_once("../views/footer.php");
?>
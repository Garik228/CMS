<?php
$dir = __DIR__."/../";
    require_once($dir."database.php");
    require_once($dir."models/func_categories.php");


    $link = db_connect();

    if(isset($_GET['action']))
        $action = $_GET['action'];
else
    $action = "";

//Добавление категории
if($action == "add"){
    if(!empty($_POST)){
        categories_new($link, $_POST['title']);
        header("Location: categories.php?id_category=".$_GET['id_category']);
    }
    $title_icon = '<span class="icon-list menumgr"></span>';
    $title_form = 'Добавление категории:';
    require_once("../views/header.php");
    include($dir."views/category_admin.php");
    require_once("../views/footer.php");

}else if($action == "edit"){
    if(!isset($_GET['id']))
        header("Location: index.php");
    $id = (int)$_GET['id'];

    if(!empty($_POST) && $id > 0){
        categories_edit($link, $id, $_POST['title']);
        header("Location: categories.php");
    }

    //Редактирование категории
    $categories = articles_of_category($link, $id_category);
    $title_icon = '<span class="icon-list menumgr"></span>';
    $title_form = 'Редактирование категории:';
    require_once("../views/header.php");
    include($dir."views/category_admin.php");
    require_once("../views/footer.php");
}

//Удаление категории
else if($action == "delete"){
    $id = $_GET['id'];
    $article = categories_delete($link, $id);
    header("Location: categories.php?id=".$_GET['id_category']);
}

//Для шаблона "Все категории"
else{
    $categories = categories_all($link);
    $title_icon = '<span class="icon-list menumgr"></span>';
    $title_form = 'Все категории:';
    require_once("../views/header.php");
    include($dir."views/categories_admin.php");
    require_once("../views/footer.php");
}
?>
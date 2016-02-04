<?php
$dir = __DIR__."/../";
    require_once($dir."database.php");
    require_once($dir."models/func_articles.php");
    require_once($dir."models/func_categories.php");


    $link = db_connect();

    if(isset($_GET['action']))
        $action = $_GET['action'];
    else
        $action = "";

function show_articles_list($link, $dir, $id_category)
{
    $articles = articles_of_category($link, $id_category);
    $title_icon = '<span class="icon-bookmark banners"></span>';
    $title_form = 'Статьи привязанные к категории:';
    require_once("../views/header.php");
    include($dir . "views/articles_admin.php");
    require_once("../views/footer.php");
}

//Добавление статьи
if($action == "add"){
    if(!empty($_POST)){
        $id_art = articles_new($link, $_POST['title'], $_POST['date'], $_POST['content'], $_GET['id_category']);
    }
    $id_category = (int)$_GET['id_category'];
    show_articles_list($link, $dir, $id_category);

}else if($action == "edit"){
    if(!isset($_GET['id'])) {
        $articles = articles_all($link);
        include($dir . "views/articles_admin.php");
    }
    else
    {
        $id = (int)$_GET['id'];

        if(!empty($_POST) && $id > 0){
            articles_edit($link, $id, $_POST['title']);
             $articles = articles_get($link, $id);

            header("Location: articles.php?id_category=".$articles['categories_id']);
        }
    }
    

}

//редактирование статьи
else if ($action == "edit-form")
{
    $id_article = (int)$_GET['id'];
    $articles = articles_get($link, $id_article);
    $querystr = "action=edit&id=".$id_article;
    $title_icon = '<span class="icon-bookmark banners"></span>';
    $title_form = 'Редактирование статьи:';
    require_once("../views/header.php");
    include($dir."views/article_admin.php");
    require_once("../views/footer.php");
}
else if ($action == "add-form"){
    $title_icon = '<span class="icon-bookmark banners"></span>';
    $title_form = 'Добавление статьи:';
    $querystr = "action=add&id_category=".$_GET['id_category'];
    require_once("../views/header.php");
    include($dir."views/article_admin.php");
    require_once("../views/footer.php");
}

//Удаление статьи
else if($action == "delete"){
    $id = $_GET['id'];

    $article = articles_delete($link, $id);
    header("Location: articles.php?id_category=".$_GET['id_category']);
}
//Отображение всех статей в шаблоне "статьи"
else if ($action == "vse_articles"){
    $title_icon = '<span class="icon-bookmark banners"></span>';
    $title_form = 'Все статьи:';
    require_once("../views/header.php");
    $articles = articles_all($link);
    include($dir . "views/articles_admin.php");
    require_once("../views/footer.php");
}
else {
    $id_category = (int)$_GET['id_category'];
    $title_icon = '<span class="icon-bookmark banners"></span>';
    $title_form = 'Статьи привязанные к категории:';
    require_once("../views/header.php");
    show_articles_list($link, $dir, $id_category);
    require_once("../views/footer.php");
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title><?=$title_form?></title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="../admin/images/sun12.png" type="image/x-icon">
    <script src="../admin/js/jquery.min.js" type="text/javascript"></script>
    <script src="../admin/js/jquery-noconflict.js" type="text/javascript"></script>
    <script src="../admin/js/jquery-migrate.min.js" type="text/javascript"></script>
    <script src="../admin/js/jupdatecheck.js" type="text/javascript"></script>
    <script src="../admin/js/extensionupdatecheck.js" type="text/javascript"></script>
    <script src="../admin/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="../admin/js/template.js?944dbf63a00ff89971e0adbe6e071ed7" type="text/javascript"></script>
</head>
<body class="admin com_cpanel view- layout- task- itemid-">
<!-- Top Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a href="#" class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="admin-logo "href="../admin/index.php"><span class="icon-out-2"></span></a>
            <div class="nav-collapse collapse">
                <ul id="menu" class="nav ">
                    <li class="dropdown"><a class="dropdown-toggle"  data-toggle="dropdown" href="#">Система <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a class="menu-cpanel"  href="../admin/index.php">Панель управления</a></li>
                            <li class="divider"><span></span></li>
                            <li><a class="menu-cpanel"  href="../admin/index.php">Общие настройки</a></li>
                            <li class="divider"><span></span></li>
                            <li><a class="menu-cpanel"  href="../admin/index.php">Очистить весь кэш</a></li>
                            <li><a class="menu-cpanel"  href="../admin/index.php">Очистить устаревший кэш</a></li>
                            <li class="divider"><span></span></li>
                            <li><a class="menu-cpanel"  href="../admin/index.php">Информация о системе</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a class="dropdown-toggle"  data-toggle="dropdown" href="#">Пользователи <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu"><a class="dropdown-toggle menu-article" data-toggle="dropdown" href="#">Менеджер пользователей</a>
                            <ul id="menu-com-users-users" class="dropdown-menu menu-component">
                                <li><a class="menu-newarticle" href="#">Создать пользователя</a></li>
                            </ul>
                            <li class="dropdown-submenu"><a class="dropdown-toggle menu-article" data-toggle="dropdown" href="#">Группы</a>
                                <ul id="menu-com-users-users" class="dropdown-menu menu-component">
                                    <li><a class="menu-newarticle" href="#">Создать группу</a></li>
                                </ul>
                            <li class="divider"><span></span></li>
                            <li class="dropdown-submenu"><a class="dropdown-toggle menu-article" data-toggle="dropdown" href="#">Уровни доступа</a>
                                <ul id="menu-com-users-users" class="dropdown-menu menu-component">
                                    <li><a class="menu-newarticle" href="#">Создать уровень доступа</a></li>
                                </ul>
                            <li class="divider"><span></span></li>
                            <li><a class="menu-cpanel"  href="../admin/index.php">Массовая рассылка сообщений</a></li>
                    </li>
                </ul>
                <li class="dropdown"><a class="dropdown-toggle"  data-toggle="dropdown" href="#">Меню <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu"><a class="dropdown-toggle menu-article" data-toggle="dropdown" href="../admin/categories.php">Категории</a>
                            <ul id="menu-com-content" class="dropdown-menu menu-component">
                                <li><a class="menu-newarticle" href="../admin/categories.php?action=add">Добавить категорию</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle"  data-toggle="dropdown" href="#">Материалы <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu"><a class="dropdown-toggle menu-article" data-toggle="dropdown" href="../admin/articles.php?action=vse_articles">Статьи</a>
                            <ul id="menu-com-content" class="dropdown-menu menu-component">
                                <li><a class="menu-newarticle"  <a href="../admin/articles.php?action=add-form&id_category=<?=$id_category?>">Добавить статью</a>
                            </ul>
                        <li><a class="menu-cpanel"  href="../admin/index.php">Архив</a></li>
                        <li class="divider"><span></span></li>
                        <li><a class="menu-cpanel"  href="../admin/index.php">Избранные материалы</a></li>
                        <li class="divider"><span></span></li>
                        <li><a class="menu-cpanel"  href="../admin/index.php">Медиа-менеджер</a></li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle"  data-toggle="dropdown" href="#">Компоненты <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu"><a class="dropdown-toggle menu-article" data-toggle="dropdown" href="#">Баннеры</a>
                            <ul id="menu-com-content" class="dropdown-menu menu-component">
                                <li><a class="menu-newarticle"  <a href="#">Баннеры</a>
                                <li><a class="menu-newarticle"  <a href="#">Статистика</a>
                            </ul>
                        <li><a class="menu-cpanel"  href="../admin/index.php">Поиск</a></li>
                        <li class="dropdown-submenu"><a class="dropdown-toggle menu-article" data-toggle="dropdown" href="#">Сообщения</a>
                            <ul id="menu-com-content" class="dropdown-menu menu-component">
                                <li><a class="menu-newarticle"  <a href="#">Создать личное сообщение</a>
                                <li><a class="menu-newarticle"  <a href="#">Читать личные сообщения</a>
                                    </ul>
                            </li>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a class="dropdown-toggle"  data-toggle="dropdown" href="#">Справка<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a class="menu-cpanel"  href="../admin/index.php">Справка по "СТОТиС"</a></li>
                        <ul id="menu-com-users-users" class="dropdown-menu menu-component">
                        </ul>
                </li>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
</nav>
<!-- Header -->
<header class="header">
    <div class="container-logo">
        <img src="../admin/images/logo.png" class="logo">
    </div>
    <div class="container-title">
        <h1 class="page-title">
            <?=$title_icon?>
            <?=$title_form?></h1>
    </div>
</header>
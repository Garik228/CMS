<html>
<head>
    <title>
        Авторизация в СТОТиС
    </title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../admin/css/loging_style.css">
    <link rel="stylesheet" href="../admin/css/reset.css">
    <link rel="stylesheet" href="../admin/vendor/bootstrap/css/bootstrap.min.css">
    <script src="../admin/vendor/jquery-2.0.3.min.js"></script>
    <script src="../admin/vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<form action="loging.php" class="form-signin ajax" method="POST">
    <div class="main-error alert alert-error hide"></div>
    <h2 class="form-signin-heading"><?php echo $message?></h2>
    <input name="login" type="text" class="input-block-level" placeholder="Имя" autofocus>
    <input name="password" type="password" class="input-block-level" placeholder="Пароль">
    <input class="btn btn-large btn-primary" name="button" type="submit" value="Вход">
</form>
<div class="navbar navbar-fixed-bottom hidden-phone">
    <p class="pull-right">
        © 2016 СТОТиС </p>
    <a href="http://localhost/CMS.git/" target="_blank" class="pull-left"> Перейти на главную страницу сайта.</a>
</div>
</html>


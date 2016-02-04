<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title><?php echo $blogname ?></title>
    <link rel="stylesheet" href="/Blog/template.css">
</head>
<body class="site com_content view-article no-layout no-task itemid-101">
<div class="body">
    <div class="container">
        <h1><?php echo $blogname ?> </h1>
        <div>
            <?php foreach($categories as $cat): ?>
                <div class="article">
                    <h3><a href="category.php?id=<?=$cat['id'] ?>"><?=$cat['title']?></a></h3>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div>
<!-- Footer -->
<footer class="footer" role="contentinfo">
    <div class="container">
        <hr>
        <p> <p class="pull-right">

            © 2016 СТОТиС			</p>
    </div>
</footer>
</body>
</html>
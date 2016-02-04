<!DOCTYPE html> 
<html> 
<head> 
    <meta charset="utf8"> 
    <title><?php echo $blogname ?></title>
    <link rel="stylesheet" href="/Blog/template.css">
    <link rel="icon" href="../admin/images/sun12.png" type="image/x-icon">
</head> 
<body> 
    <div class="container"> 
        <h1><?php echo $blogname ?> </h1>
        <div>
        <?php foreach($articles as $a): ?> 
            <div class="article"> 
                <h3><a href="article.php?id=<?=$a['id'] ?>"><?=$a['title']?></a></h3>
            </div> 
        <?php endforeach ?> 
        </div>
        <!-- Footer -->
        <footer class="footer" role="contentinfo">
            <div class="container">
                <hr>
                <p> <p class="pull-right">

                    © 2016 СТОТиС			</p>
            </div>
        </footer>
    </div> 
    
</body> 
</html> 
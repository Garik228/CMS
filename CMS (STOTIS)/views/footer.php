<?php
session_start ();
if ($_GET['exit'] == 1 )
{
unset ($_SESSION['auth']);
session_destroy();
exit();
}
?>
<!-- Begin Status Module -->
<div id="status" class="navbar navbar-fixed-bottom hidden-phone">
    <div class="btn-toolbar">
        <div class="btn-group pull-right">
            <p>
                Версия 1.0	&nbsp;—&nbsp;
                © 2016 СТОТиС				</p>

        </div>
        <div class="btn-group pull-right">
        </div>
        <div class="btn-group viewsite">
            <a href="../index.php" target="_blank"><span class="icon-out-2"></span> Просмотр сайта</a>
            <a href="http://localhost/Blog/admin/loging.php?exit=1"> Выход </a>
        </div>
    </div>
    </div>
    <!-- End Status Module -->
    </body>
</html>
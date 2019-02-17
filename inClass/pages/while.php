<?php
// session_unset();
session_destroy();
require_once '../global/global.php';
session_name('loop');
session_start();
$_SESSION['sum'] = 0;
$_SESSION['count'] = 0;
$_SESSION['num'] = 0;
$header = session_name();
?>
<!DOCTYPE html>
<html lang='en'>
    <?php echo render_title($header); ?>
    <body>
        <main>
            <div class="container">
                <div class="bann">Menu</div>
                <div class="head" style="grid-area:head;text-align:center" >
                    <h1><?php echo render_header($header); ?></h1>
                </div>
                <div class="navi">
                    <?php echo render_nav($header); ?>
                </div>
                <div class="cont">
                    <?php 
                    require_once 'content/while/form.php';
                    ?>
                </div>
                <div class="foot">
                    <?php echo date('l jS'), '<br>', date('F Y'), '<br>'; ?>
                    Charles Oroko
                </div>
            </div>
        </main>
    </body>
</html>
<?php
require_once '../global/global.php';
$header = 'test';
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
                    <?php require_once "content/test/form.php"; ?>
                </div>
                <div class="foot">
                    <?php echo date('l jS'), '<br>', date('F Y'), '<br>'; ?>
                    Charles Oroko
                </div>
            </div>
        </main>
    </body>
</html>
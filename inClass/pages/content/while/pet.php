<?php
require_once '../global/global.php';
$header = 'pets';
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>In Class Assignments</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../styles/main.css" />
    </head>
    <body>
        <main>
            <div class="container">
                <div class="bann">Menu</div>
                <div class="head">
                    <h1><?php echo render_header($header); ?></h1>
                </div>
                <div class="navi">
                    <?php echo render_nav($header); ?>
                </div>
                <div class="cont">Main stuff</div>
                <div class="foot">
                    <?php echo date('l jS'), '<br>', date('F Y'), '<br>'; ?>
                    Charles Oroko                
                </div>
            </div>
        </main>
    </body>
</html>
<?php
$x = filter_input(INPUT_POST, 'x', FILTER_VALIDATE_FLOAT);
$y = filter_input(INPUT_POST, 'y', FILTER_VALIDATE_FLOAT);
$operation = filter_input(INPUT_POST, 'op');
$error = '';
if ($x == null) {
    $error1 = 'x is empty!<br>';
}
if ($y == null) {
    $error2 = 'y is empty!<br>';
}

switch($operation) {
    case 'add':
        $answer = $x + $y;
        break;
    case 'sub':
        $answer = $x - $y;
        break;
    case 'mul':
        $answer = $x * $y;
        break;
    case 'div':
        $answer = $x / $y;
        break;
    default:
        $error3 = 'you did not choose an operation!<br>';
        $answer = '???';
        break;
}

?>
<!DOCTYPE html>
<html>
    <body>
        <main>
            <label>The Answer is:</label>
            <?php 
            echo $answer;
            echo '<br>';
            echo $error1,$error2,$error3;
            ?><br>
        </main>
    </body>
</html>

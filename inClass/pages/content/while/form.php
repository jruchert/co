<?php
session_name('loop');
session_start();

$prompt1 = 'Type in a number. It will be divided by 2 until the computer can no longer represent the result.';
$prompt2 = 'The sum of all the results and the input should tend to double the input.'
?>
<form action="" method="post" id="form">
    <label>
        <?php echo $prompt1; echo '<br>'; echo $prompt2; ?></label>
    <p />
    <input type="text" name="num" >
    <label>&nbsp;
    </label>
    <input type="submit" value="Evaluate">
    <br>
</form>
<?php
if (isset($_POST['num'])) {
    $_SESSION['num'] = $_POST['num'];
}
require_once 'answer.php';
[$sum, $count] = [$_SESSION['sum'], $_SESSION['count']];
?>
<ul>
    <li>
        <?php 
        if ($sum == 0) {
            echo 'Please enter a number that is not zero.';
        } else {
            echo 'The sum of all the numbers found is ', $sum;
        }
        ?>
    </li>
    <li>
        <?php
        echo 'The number of times divided by two is ', $count;
        ?>
    </li>
</ul>

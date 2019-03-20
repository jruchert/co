<?php
session_name('array');
session_start();

$prompt1 = 'Lets create an array of random numbers!';
// $prompt2 = 'The sum of all the results and the input should tend to double the input.'
?>
<form action="" method="post" id="form">
    <?php echo $prompt1; echo '<br>'; //echo $prompt2; ?>
    <p />
    <label>Maximum Value</label>
    <input type="text" name="max" >
    <p />
    <label>Minimum Value</label>
    <input type="text" name="min" >
    <label>Number of Elements</label>
    <input type="text" name="num" >
    <label>&nbsp;
    </label>
    <input type="submit" value="Evaluate">
    <br>
</form>
<?php
if (isset($_POST['num']) && isset($_POST['max']) && isset($_POST['min'])) {
    $_SESSION['num'] = $_POST['num'];
    $_SESSION['max'] = $_POST['max'];
    $_SESSION['min'] = $_POST['min'];
}
require_once 'functions.php';
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

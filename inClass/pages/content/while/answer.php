<?php
session_name('loop');
session_start();
require_once 'functions.php';

$num = filter_var($_SESSION['num']);
if (filter_var($num, FILTER_VALIDATE_FLOAT)) {
    [$sum, $count] = halved($num);
    /*} else {
    $status = 'Please enter a number!';
    require 'status.php';
*/}

if ($sum != null) {
    $_SESSION['sum'] = $sum;
    $_SESSION['count'] = $count;
}

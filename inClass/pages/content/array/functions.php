<?php
session_name('array');
session_start();
$min = $_SESSION['min'];
$array = range($min, $max);
shuffle($array);
return array_slice($array, 0, $num);

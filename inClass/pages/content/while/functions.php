<?php
// Returns the smallest number that can be represented
// using php when the passed number is continually
// divided by two
function halved($x) {
    $sum = 0;
    while ($x != 0) {
        $sum += $x;
        $x = $x/2;
        $count++;
    }
    return [$sum, $count];
}
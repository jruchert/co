<?php
$array = range(1,5);
$count = 0;
echo 'The value in my array at index ', $count, ' is ', current($array), '<br>';
while(next($array)) {
    $count += 1;
    echo 'The value in my array at index ', $count, ' is ', current($array), '<br>';
}
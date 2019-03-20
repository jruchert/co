<?php
function create_associative_array($key, $value) {
    $array = array(
        $key => $value
    );
    return $array;
}

function print_array($key, $value) {
    $array = create_associative_array($key, $value);
    foreach($array as $key => $value) {
        echo 'The key in my associative array is: ', $key;
        echo '<br>The value in my associative array is: ', $value;
    }
}
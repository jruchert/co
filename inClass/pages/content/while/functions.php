git <?php
// Returns the smallest number that can be represented
// using php when the passed number is continually
// divided by two
function halved($num) {
    $x = $num;
    while ($x != 0) {
        $x = $x/2;
        
    }
    return $x;
}
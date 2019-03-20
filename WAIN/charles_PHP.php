<?php
if (isset($_POST['associative'])) {
    require_once 'associative.php';
    print_array($_POST['text1'], $_POST['text2']);
}
elseif (isset($_POST['index'])) {
    require_once 'array.php';
}

?>

<?php
//Get the name of the category
$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
$pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_SPECIAL_CHARS);

$success = false;

if (empty(trim($name))) {
    $error = 'Please enter a username';
    $success = false;
} elseif (empty(trim($pass))) {
    $error = 'Please enter a password';
    $success = false;
} else {
    $success = true;
}

if ($success) {
    require_once 'database.php';
    
    $query = 'insert into users (username, password) values (:name, :pass)';
    $statement = $db->prepare($query);
    $statement->bindValue(':pass', $pass);
    $statement->bindValue(':name', $name);
    $statement->execute();
    $statement->closeCursor();
    
    $status = 'New user added! Welcome $name';
    include 'status.php';
    include 'main.php';
} else {
    include 'error.php';
    include 'register_form.php';
}

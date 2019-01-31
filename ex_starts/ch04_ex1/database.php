<?php
    $dsn = 'mysql:host=db;dbname=my_guitar_shop1';
    $username = 'c.oroko';
    $password = 'lacrimosa';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include 'database_error.php';
        exit();
    }

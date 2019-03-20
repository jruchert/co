<?php
    $dsn = 'mysql:host=db;dbname=co_guitar_shop';
    $username = 'c.oroko';
    $password = 'lacrimosa';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include 'database_error.php';
        exit();
    }

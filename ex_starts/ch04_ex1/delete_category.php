<?php
require_once 'database.php';

// Get IDs
$categoryName = filter_input(INPUT_POST, 'categoryName');
$categoryID = filter_input(INPUT_POST, 'categoryid', FILTER_VALIDATE_INT);

// Delete the product from the database
if ($categoryName !== false) {
    $query = "DELETE FROM categories
              WHERE categoryName = :category";
    $statement = $db->prepare($query);
    $statement->bindValue(':category', $categoryName);
    $success = $statement->execute();
    $statement->closeCursor();
    //var_dump($statement);
}

// Display the Product List page
include 'category_list.php';

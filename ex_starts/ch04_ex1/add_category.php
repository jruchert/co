<?php
require_once 'database.php';
//Get the name of the category
$category = filter_input(INPUT_POST, 'categoryName');
if ($category == null) {
    $error = 'Please enter a category';
    include 'error.php';
} else {
    $query = 'insert into categories (categoryName) values (:categoryName)';
    $statement = $db->prepare($query);
    $statement->bindValue(':categoryName', $category);
    $statement->execute();
    $statement->closeCursor();
}

include 'category_list.php';
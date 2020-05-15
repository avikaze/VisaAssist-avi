<?php
require_once "../../classes/Database.php";
require_once "../../classes/Category.php";

$category = new Category();
$categories = $category->getActiveCategories();

echo json_encode($categories);
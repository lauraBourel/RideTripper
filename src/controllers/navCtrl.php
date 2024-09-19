<?php
require __DIR__ . '/../models/Category.php';
$category = new Category();

require __DIR__ . '/../models/Subcategory.php';
$subcategory = new Subcategory();

$categories = $category->getAll();
$subcategories = $subcategory->getAll();



$sortedSubcategories = [];
foreach ($categories as $category) {
    $sortedSubcategories[$category->id] = [];
}

foreach ($subcategories as $subcategory) {
    array_push($sortedSubcategories[$subcategory->id_category], $subcategory);
}

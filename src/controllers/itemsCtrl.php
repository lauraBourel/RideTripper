<?php
session_start();

if (empty($_GET) || empty($_GET['type']) || empty($_GET['id'])) header('Location: index.php');
if ($_GET['type'] != 'cat' && $_GET['type'] != 'subcat')  header('Location: index.php');

require 'models/Items.php';
$item = new Item();
$error = [];

if (!empty($_POST) && !empty($_POST['type'])) {

    if ($_POST['type'] == 'create') {

        if (!empty($_POST['name'])) {
            if (strlen($_POST['name']) <= 50) {
                $item->name = htmlspecialchars($_POST['name']);
            } else {
                $error['name'] = '50 caracteres maximum';
            }
        } else {
            $error['name'] = 'Nom du produit obligatoire';
        }

        if (!empty($_POST['description'])) {
            if (strlen($_POST['description']) <= 255) {
                $item->description = htmlspecialchars($_POST['description']);
            } else {
                $error['description'] = '255 caracteres maximum';
            }
        } else {
            $error['description'] = 'Description du produit obligatoire';
        }

        if (!empty($_POST['price'])) {
            if (strlen($_POST['price']) <= 6) {
                $item->price = htmlspecialchars($_POST['price']);
            } else {
                $error['price'] = '255 caracteres maximum';
            }
        } else {
            $error['price'] = 'Description du produit obligatoire';
        }

        if (!empty($_POST['quantity'])) {
            $item->quantity = htmlspecialchars($_POST['quantity']);
        } else {
            $error['quantity'] = 'Quantité produit obligatoire';
        }

        if (!empty($_POST['id_subcategory'])) {
            $item->id_subcategory = htmlspecialchars($_POST['id_subcategory']);
        } else {
            $error['id_subcategory'] = 'Id categorie obligatoire';
        }


        if (empty($error)) {
            $item->register();
        } else {
            $error['server'] = 'Enregistrement échoué, réessayer plus tard';
        }
    }
}

if ($_GET['type'] == 'cat') {
    $item->id_category = $_GET['id'];
    $dataItem = $item->getByCat();
} else {
    $item->id_subcategory = $_GET['id'];
    $dataItem = $item->getBySubCat();
}

// require 'models/Category.php';
// $category = new Category();
// $dataCategory = $category->getAll();

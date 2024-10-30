<?php
session_start();
if (empty($_GET['id'])) header('Location: /');

require 'models/Items.php';

$newItem = new Item();
$newItem->id = $_GET['id'];

if (!empty($_POST)) {
    $error = [];

    if (!empty($_POST['name'])) {
        if (strlen($_POST['name']) >= 3 && strlen($_POST['name']) <= 50) {
            $newItem->name = htmlspecialchars($_POST['name']);
        } else {
            $error['name'] = 'Entre 3 et 50 caracteres';
        }
    } else {
        $error['name'] = 'Nom obligatoire';
    }

    if (!empty($_POST['description'])) {
        if (strlen($_POST['description']) <= 1500) {
            $newItem->description = htmlspecialchars($_POST['description']);
        } else {
            $error['description'] = '1500 caracteres maximum';
        }
    } else {
        $error['description'] = 'Description du produit obligatoire';
    }


    if (!empty($_POST['price'])) {
        if (strlen($_POST['price']) <= 6) {
            $newItem->price = htmlspecialchars($_POST['price']);
        } else {
            $error['price'] = '255 caracteres maximum';
        }
    } else {
        $error['price'] = 'Description du produit obligatoire';
    }


    if (!empty($_POST['quantity'])) {
        $newItem->quantity = htmlspecialchars($_POST['quantity']);
    } else {
        $error['quantity'] = 'Quantité produit obligatoire';
    }

    if (!empty($_POST['id_subcategory'])) {
        $newItem->id_subcategory = htmlspecialchars($_POST['id_subcategory']);
    } else {
        $error['id_subcategory'] = 'Id categorie obligatoire';
    }


    
    if (empty($error)) {
        $newItem->update();
        header('Location: item.php');
    } else {
        $error['server'] = 'Modification échoué, réessayer plus tard';
    }
}

$newItemData = $newItem->getById();

$name = !empty($_POST['name']) ? $_POST['name'] : $newItemData->name;
$description = !empty($_POST['description']) ? $_POST['description'] : $newItemData->description;
$price = !empty($_POST['price']) ? $_POST['price'] : $newItemData->price;
$quantity = !empty($_POST['quantity']) ? $_POST['quantity'] : $newItemData->quantity;
$id_subcategory = !empty($_POST['id_subcategory']) ? $_POST['id_subcategory'] : $newItemData->id_subcategory;

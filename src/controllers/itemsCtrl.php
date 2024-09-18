<?php
session_start();

if (!empty($_POST) && !empty($_POST['type'])) {
    require 'models/Items.php';
    $item = new Item();
    $error = [];

    $item->id = $_SESSION['id'];
    $dataItem = $item->getById();


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

        if (!empty($_POST['id_category'])) {
            $item->id_category = htmlspecialchars($_POST['id_category']);
        } else {
            $error['id_category'] = 'Id categorie obligatoire';
        }


        if (empty($error)) {
            $item->register();
        } else {
            $error['server'] = 'Enregistrement échoué, réessayer plus tard';
        }
    }
}

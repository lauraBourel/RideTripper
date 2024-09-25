<?php
session_start();
if (empty($_SESSION['id'])) header('Location: index.php');

if (!empty($_POST) && !empty($_POST['type'])) {
    require_once 'models/Adress.php';

    $adress = new Adress();
    $error = [];

    $adress->id_users = $_SESSION['id'];

    if ($_POST['type'] == 'create') {

        if (!empty($_POST['street'])) {
            if (strlen($_POST['street']) >= 3 && strlen($_POST['street']) <= 50) {
                $adress->street = htmlspecialchars($_POST['street']);
            } else {
                $error['street'] = 'Entre 3 et 50 caracteres';
            }
        } else {
            $error['street'] = 'Rue obligatoire';
        }


        if (!empty($_POST['number'])) {
            if (strlen($_POST['number']) <= 3) {
                $adress->number = htmlspecialchars($_POST['number']);
            } else {
                $error['number'] = 'Entre 3 et 50 caractères';
            }
        } else {
            $error['number'] = 'Numéro de rue obligatoire';
        }

        if (!empty($_POST['city'])) {
            if (strlen($_POST['city']) >= 3 && strlen($_POST['city']) <= 50) {
                $adress->city = htmlspecialchars($_POST['city']);
            } else {
                $error['city'] = 'Entre 3 et 50 caracteres';
            }
        } else {
            $error['city'] = 'Ville obligatoire';
        }

        if (!empty($_POST['country'])) {
            if (strlen($_POST['country']) >= 3 && strlen($_POST['country']) <= 50) {
                $adress->country = htmlspecialchars($_POST['country']);
            } else {
                $error['country'] = 'Entre 3 et 50 caracteres';
            }
        } else {
            $error['country'] = 'Pays obligatoire';
        }


        if (empty($error)) {
            $adress->register();
        } else {
            $error['server'] = 'Enregistrement échoué, réessayez plus tard';
        }
    }
}

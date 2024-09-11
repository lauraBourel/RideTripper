<?php
session_start();
if (empty($_SESSION['id'])) header('Location: index.php');
require 'models/User.php';
$user = new User();
$user->id = $_SESSION['id'];

if (!empty($_POST)) {
    $error = [];

    $dataUser = $user->getById();

    if (!empty($_POST['lastname'])) {
        if (strlen($_POST['lastname']) >= 3 && strlen($_POST['lastname']) <= 50) {
            $user->lastname = htmlspecialchars($_POST['lastname']);
        } else {
            $error['lastname'] = 'Entre 3 et 50 caracteres';
        }
    } else {
        $error['lastname'] = 'Nom obligatoire';
    }
    if (!empty($_POST['firstname'])) {
        if (strlen($_POST['firstname']) >= 3 && strlen($_POST['firstname']) <= 50) {
            $user->firstname = htmlspecialchars($_POST['firstname']);
        } else {
            $error['firstname'] = 'Entre 3 et 50 caracteres';
        }
    } else {
        $error['firstname'] = 'Prenom obligatoire';
    }

    if (!empty($_POST['email'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $dataUser = $user->getByEmail();
            if (empty($dataUser)) {
                $user->email = $_POST['email'];
            } else {
                $error['email'] = 'Cet email est déjà utilisé';
            }
        } else {
            $error['email'] = 'Email invalide';
        }
    } else {
        $error['email'] = 'Email obligatoire';
    }

    if (!empty($_POST['phone_number'])) {
        if (strlen($_POST['phone_number']) >= 3 && strlen($_POST['phone_number']) <= 20) {
            $phone = htmlspecialchars($_POST['phone_number']);
            $phone = str_replace(' ', '', $phone);
            $phone = str_replace('-', '', $phone);
            $phone = str_replace('.', '', $phone);

            if (preg_match('/^\+?[0-9]{0,19}$/', $phone)) {
                $user->phone = $phone;
            } else {
                $error['phone_number'] = 'Numéro invalide';
            }
        } else {
            $error['phone_number'] = 'Entre 3 et 20 caractères';
        }
    } else {
        $error['phone_number'] = 'Numéro de téléphone obligatoire';
    }


    if (!empty($_POST['birthday'])) {
        if (preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $_POST['birthday'])) {
            list($y, $m, $d) = explode('-', $_POST['birthday']);
            if (checkdate($m, $d, $y)) {
                if (strtotime($_POST['birthday']) < strtotime('now')) {
                    $user->birthday = htmlspecialchars($_POST['birthday']);
                } else {
                    $error['birthday'] = 'Trop jeune';
                }
            } else {
                $error['birthday'] = 'Format AAAA-MM-JJ';
            }
        } else {
            $error['birthday'] = 'Format AAAA-MM-JJ';
        }
    } else {
        $error['birthday'] = 'Date de naissance obligatoire';
    }


    if (empty($error)) {
        if (empty($error)) {
            $result = $user->update();
            if ($result) {
                header('Location: ./account.php');
            } else {
                $error['global'] = 'Echec de la modification';
            }
        }
    }
}

$userData = $user->getById();

$lastname = !empty($_POST['lastname']) ? $_POST['lastname'] : $userData->lastname;
$firstname = !empty($_POST['firstname']) ? $_POST['firstname'] : $userData->firstname;
$birthday = !empty($_POST['birthday']) ? $_POST['birthday'] : $userData->birthday;
$email = !empty($_POST['email']) ? $_POST['email'] : $userData->email;
$phone_number = !empty($_POST['phone_number']) ? $_POST['phone_number'] : $userData->phone_number;

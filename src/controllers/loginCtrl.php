<?php
session_start();
if (!empty($_SESSION['id'])) header('Location: index.php');

if (!empty($_POST) && !empty($_POST['type'])) {
    require 'models/User.php';
    $user = new User();
    $error = [];

    if ($_POST['type'] == 'create') {

        if (isset($_POST['civility'])) {
            if (!empty($_POST['civility'])) {
                $user->civility = 0;
            } else {
                $user->civility = 1;
            }
        } else {
            $error['civility'] = 'Civilité obligatoire';
        }


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
                $user->email = htmlspecialchars($_POST['email']);
                $checkUser = $user->getByEmail();
                if ($checkUser) {
                    $error['email'] = 'email deja utiliser';
                }
            } else {
                $error['email'] = 'email non valide';
            }
        } else {
            $error['email'] = 'email obligatoire';
        }

        if (!empty($_POST['password'])) {
            $user->password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        } else {
            $error['password'] = 'Mot de passe obligatoire';
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
            if ($user->register()) {
                $checkUser = $user->getByEmail();
                if ($checkUser) {
                    $_SESSION['id'] = $checkUser->id;
                    header('Location: index.php');
                } else {
                    $error['server'] = 'enregistrement reussie mais echec de la connexion';
                }
            } else {
                $error['server'] = 'Enregistrement échoué, réessayer plus tard';
            }
        }
    } elseif ($_POST['type'] == 'login') {




        if (!empty($_POST['login_email'])) {
            $user->email = $_POST['login_email'];
        } else {
            $error['login_email'] = 'email obligatoire';
        }

        if (!empty($_POST['login_password'])) {
            $user->password = $_POST['login_password'];
        } else {
            $error['login_password'] = 'Mot de passe obligatoire';
        }
        if (empty($error)) {
            $data = $user->getByEmail();
            if ($data) {
                if (password_verify($user->password, $data->password)) {
                    $_SESSION['id'] = $data->id;
                    header('Location: index.php');
                    exit();
                } else {
                    $error['login_password'] = 'Mot de passe incorrecte';
                }
            } else {
                $error['global'] = 'inexistant';
            }
        }
    }
}

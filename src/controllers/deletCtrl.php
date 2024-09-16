<?php
session_start();
if (empty($_SESSION['id'])) header('Location: index.php');

require 'models/User.php';
$user = new User();
$user->id = $_SESSION['id'];

$deletUser = $user->delete();
if ($deletUser) {
    session_destroy();
    $message = "Compte supprimé avec succès. vous allez etre redirigée";
} else {
    $message = "Erreur lors de la suppression du compte : ";
}
?>
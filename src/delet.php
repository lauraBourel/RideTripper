<?php 
session_start();
session_destroy();

$deletUser = $user->delete();
if ($deletUser) {
    echo "Compte supprimé avec succès.";
} else {
    echo "Erreur lors de la suppression du compte : ";
}

header('Location: index.php');

?>
<?php require 'controllers/accountCtrl.php' ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/account.css">
    <title>Mon compte</title>
</head>

<body>
    <?php require './ui/navbar.php' ?>
    <main class="midBox">
        <ul class="accountMenu">
            <li>
                <a class="linkAccount" href="#" title="Tableau de bord">Tableau de bord</a>
            </li>
            <li>
                <a class="linkAccount" href="#" title="Commandes">Commandes</a>
            </li>
            <li>
                <a class="linkAccount" href="#" title="Adresses">Adresses</a>
            </li>
            <li>
                <a class="linkAccount" href="#" title="Details du compte">Détails du compte</a>
            </li>
            <li>
                <a class="linkAccount" href="logout.php" title="Deconnexion">Deconnexion</a>
            </li>
        </ul>
        <div class="descriptionAccount">
            <p>
            <h1>Bonjour Identifiant,</h1>
            À partir du tableau de bord de votre compte,
            vous pouvez visualiser vos commandes récetentes,<br>
            gérer vos adresses de livraison et de facturation
            ainsi que changer votre mot de passe
            et les détails de votre compte.</p>
        </div>
    </main>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/account.js"></script>
</body>

</html>
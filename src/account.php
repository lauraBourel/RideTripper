<?php require_once 'controllers/accountCtrl.php' ?>
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
    <?php require_once './ui/navbar.php' ?>
    <main class="midBox">
        <ul class="accountMenu">
            <li>
                <a href="account.php" title="Tableau de bord">
                    <span class="linkAccount">Tableau de bord</span>
                    <ion-icon class="accountLogo" name="analytics-outline">
                    </ion-icon>
                </a>
            </li>
            <li>
                <a href="#" title="Commandes">
                    <span class="linkAccount">Commandes</span>
                    <ion-icon class="accountLogo" name="file-tray-full-outline"></ion-icon>
                </a>
            </li>
            <li>
                <a href="adress.php" title="Adresses">
                    <span class="linkAccount">Adresses</span>
                    <ion-icon class="accountLogo" name="location-outline"></ion-icon>
                </a>
                
            </li>
            <li>
                <a href="detail.php" title="Details du compte">
                    <span class="linkAccount">Détails du compte</span>
                    <ion-icon class="accountLogo" name="settings-outline"></ion-icon>
                </a>
            </li>
            <li>
                <a href="addItem.php" title="Ajout d'articles">
                    <span class="linkAccount">Ajout d'articles</span>
                    <ion-icon class="accountLogo" name="settings-outline"></ion-icon>
                </a>
            </li>
            <li>
                <a href="logout.php" title="Deconnexion">
                    <span class="linkAccount">Deconnexion</span>
                    <ion-icon class="accountLogo" name="power-outline"></ion-icon>
                </a>
            </li>
        </ul>
        <div class="descriptionAccount">
            <h1>Bonjour <?=  $dataUser->firstname ?>,</h1>
            <p> À partir du tableau de bord de votre compte,
                vous pouvez visualiser vos commandes récentes,<br>
                gérer vos adresses de livraison et de facturation
                ainsi que changer votre mot de passe
                et les détails de votre compte.</p>
        </div>
    </main>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
<?php require_once 'controllers/adressCtrl.php'  ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/adress.css">
    <title>Adresse de livraison</title>
</head>

<body>
    <!-- Display Navbar -->
    <?php require_once './ui/navbar.php' ?>
    <!-- Main section containing the account menu -->
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
                <a href="logout.php" title="Deconnexion">
                    <span class="linkAccount">Deconnexion</span>
                    <ion-icon class="accountLogo" name="power-outline"></ion-icon>
                </a>
            </li>
        </ul>
        <!-- Section for displaying addresses -->
        <div class="adressAccount">
            <!-- Loop through each address in adressDatas -->
            <?php foreach ($adressDatas as $adressData) { ?>
                <div class="adressCard">
                    <div class="headCard">
                        <div class="adressTitle">
                            <h1 class="adress">Adresse :</h1>
                        </div>
                        <a href="">
                            <ion-icon class="pen" name="pencil-outline"></ion-icon>
                        </a>
                    </div>
                    <!-- Display address details -->
                    <ul>
                    <li><?= $adressData->number ?></li>
                    <li><?= $adressData->street ?></li>
                    <li><?= $adressData->city ?></li>
                    <li><?= $adressData->country ?></li>
                    </ul>
                </div>
            <?php } ?>
            <!-- Card for adding a new address -->
            <div class="addAdressCard">
                <a href="addAdress.php">
                    <ion-icon class="add" name="add-outline"></ion-icon>
                </a>
            </div>
        </div>

    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
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
                <a href="logout.php" title="Deconnexion">
                    <span class="linkAccount">Deconnexion</span>
                    <ion-icon class="accountLogo" name="power-outline"></ion-icon>
                </a>
            </li>
        </ul>


        <form method="POST">
            <p>Enregistrer votre adresse de livraison :</p>
            <div>
                <input <?= !empty($_POST['street']) ? $_POST['street'] : '' ?> type="text" name="street" id="street" placeholder="Rue" required />
                <?php if (!empty($error) && !empty($error['street'])) { ?>
                    <small style="color: red;"><?= $error['street'] ?></small>
                <?php } ?>


                <input <?= !empty($_POST['number']) ? $_POST['number'] : '' ?> type="text" name="number" id="number" placeholder="Numero de rue" required>
                <?php if (!empty($error) && !empty($error['number'])) { ?>
                    <small style="color: red;"><?= $error['number'] ?></small>
                <?php } ?>

            </div>
            
            <div>
                <input value="<?= !empty($_POST['city']) ? $_POST['city'] : '' ?>" type="text" name="city" id="city" placeholder="Code postal et Ville" required>
                <?php if (!empty($error) && !empty($error['city'])) { ?>
                    <small style="color: red;"><?= $error['city'] ?></small>
                <?php } ?>
            </div>
    
            <div>
                <input <?= !empty($_POST['country']) ? $_POST['country'] : '' ?> type="text" name="country" id="country" placeholder="Pays" required />
                <?php if (!empty($error) && !empty($error['country'])) { ?>
                    <small style="color: red;"><?= $error['country'] ?></small>
                <?php } ?>
            </div>
            <button class="custom" name="type" value="create">ENREGISTRER MON ADRESSE</button>
            </div>
        </form>

    </main>





























    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
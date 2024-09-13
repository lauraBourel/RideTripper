<?php require_once 'controllers/detailCtrl.php'  ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/account.css">
    <link rel="stylesheet" href="assets/css/detail.css">
    <title>Détails du compte</title>
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
                <a href="#" title="Adresses">
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
            <li>
                <a href="delet.php">
                <span class="linkAccount">Suppression du compte</span>
                <ion-icon class="accountLogo" name="trash-outline"></ion-icon>
                </a>
            </li>
        </ul>

        <div class="detailAccount">
            <form method="POST">
                <h2 class="titleUpdate">Modification de vos informations personnelles :</h2>
                <div class="inputBoxR">
                    <input value="<?= $lastname ?>" type="text" name="lastname" id="lastname" placeholder="Nom" required>
                    <?php if (!empty($error) && !empty($error['lastname'])) { ?>
                        <small style="color: red;"><?= $error['lastname'] ?></small>
                    <?php } ?>
                </div>
                <div class="inputBoxR">
                    <input value="<?= $firstname ?>" type="text" name="firstname" id="firstname" placeholder="Prenom" required>
                    <?php if (!empty($error) && !empty($error['firstname'])) { ?>
                        <small style="color: red;"><?= $error['firstname'] ?></small>
                    <?php } ?>
                </div>
                <div class="inputBoxR label">
                    <label for="birthday"> Date de naissance :</label>
                    <input value="<?= $birthday ?>" type="date" name="birthday" id="birthday" placeholder="Prenom" required>
                    <?php if (!empty($error) && !empty($error['birthday'])) { ?>
                        <small style="color: red;"><?= $error['birthday'] ?></small>
                    <?php } ?>
                </div>


                <div class="inputBoxR">
                    <div class="iconBox">
                        <ion-icon class="iconName" name="person-outline"></ion-icon>
                    </div>
                    <input value="<?= $email ?>" type="email" name="email" id="email" placeholder="Email" required>
                    <?php if (!empty($error) && !empty($error['email'])) { ?>
                        <small style="color: red;"><?= $error['email'] ?></small>
                    <?php } ?>
                </div>
                <div class="inputBoxR">
                    <div class="iconBox">
                        <ion-icon class="iconName" name="call-outline"></ion-icon>
                    </div>
                    <input value="<?= $phone_number ?>" type="phone_number" name="phone_number" id="phone_number" placeholder="Telephone" required>
                    <?php if (!empty($error) && !empty($error['phone_number'])) { ?>
                        <small style="color: red;"><?= $error['phone_number'] ?></small>
                    <?php } ?>
                </div>
                <button class="custom" name="type" value="create">ENREGISTRER MODIFICATION</button>
            </form>
        </div>
    </main>



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="assets/js/detail.js"></script>
</body>

</html>
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
            <li>
                <a href="delet.php">
                    <span class="linkAccount">Suppression du compte</span>
                    <ion-icon class="accountLogo" name="trash-outline"></ion-icon>
                </a>
            </li>
        </ul>

        <div class="detailAccount">
            <!-- Form for updating personal account details -->
            <form method="POST">
                <h2 class="titleUpdate">Modification de vos informations personnelles :</h2>
                <!-- Input for the last name -->
                <div class="inputBox">
                    <input value="<?= $lastname ?>" type="text" name="lastname" id="lastname" placeholder="Nom" required>
                    <!-- Display error message if the last name is invalid -->
                    <?php if (!empty($error) && !empty($error['lastname'])) { ?>
                        <small style="color: red;"><?= $error['lastname'] ?></small>
                    <?php } ?>
                </div>
                <!-- Input for the first name -->
                <div class="inputBox">
                    <input value="<?= $firstname ?>" type="text" name="firstname" id="firstname" placeholder="Prenom" required>
                    <!-- Display error message if the first name is invalid -->
                    <?php if (!empty($error) && !empty($error['firstname'])) { ?>
                        <small style="color: red;"><?= $error['firstname'] ?></small>
                    <?php } ?>
                </div>
                <!-- Input for the birthday -->
                <div class="inputBox label">
                    <label for="birthday"> Date de naissance :</label>
                    <input value="<?= $birthday ?>" type="date" name="birthday" id="birthday" placeholder="Prenom" required>
                    <!-- Display error message if the birthday is invalid -->
                    <?php if (!empty($error) && !empty($error['birthday'])) { ?>
                        <small style="color: red;"><?= $error['birthday'] ?></small>
                    <?php } ?>
                </div>
                <!-- Input for the email -->
                <div class="inputBox">
                    <div class="iconBox">
                        <ion-icon class="iconName" name="person-outline"></ion-icon>
                    </div>
                    <input value="<?= $email ?>" type="email" name="email" id="email" placeholder="Email" required>
                    <!-- Display error message if the email is invalid -->
                    <?php if (!empty($error) && !empty($error['email'])) { ?>
                        <small style="color: red;"><?= $error['email'] ?></small>
                    <?php } ?>
                </div>
                <!-- Input for the phone number -->
                <div class="inputBox">
                    <div class="iconBox">
                        <ion-icon class="iconName" name="call-outline"></ion-icon>
                    </div>
                    <input value="<?= $phone_number ?>" type="phone_number" name="phone_number" id="phone_number" placeholder="Telephone" required>
                    <!-- Display error message if the phone number is invalid -->
                    <?php if (!empty($error) && !empty($error['phone_number'])) { ?>
                        <small style="color: red;"><?= $error['phone_number'] ?></small>
                    <?php } ?>
                </div>
                <!-- Button to save the changes -->
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
<?php require_once 'controllers/loginCtrl.php'  ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Connexion-Inscription</title>
</head>

<body>
    <?php require './ui/navbar.php' ?>

    <main>
        <form method="POST" class="log">
            <p class="txtLog">Se connecter :</p>
            <div class="inputBox">
                <div class="iconBox">
                    <ion-icon class="iconName" name="person-outline"></ion-icon>
                </div>
                <input type="text" name="login_email" id="name" placeholder="Email" />
                <?php if (!empty($error) && !empty($error['login_email'])) { ?>
                    <small style="color: red;"><?= $error['login_email'] ?></small>
                <?php } ?>
            </div>
            <div class="inputBox">
                <div class="iconBox">
                    <ion-icon class="iconLock" name="lock-closed-outline"></ion-icon>
                </div>
                <input type="password" name="login_password" id="password" placeholder="Mot de passe" />
                <?php if (!empty($error) && !empty($error['login_password'])) { ?>
                    <small style="color: red;"><?= $error['login_password'] ?></small>
                <?php } ?>
            </div>
            <div class="saveForgot">
                <div class="rememberMe">
                    <input type="checkbox" id="rememberMe" name="rememberMe" checked />
                    <label for="rememberMe" class="rememberMe">Se souvenir de moi</label>
                </div>
                <a class="forgotPassword" href="">Mot de passe oublié ?</a>
            </div>
            <button class="btnLog" name="type" type="submit" value="login">CONNEXION</button>
        </form>


        
        <form method="POST" class="register">
            <div class="registerInfo">
            <p class="txtRegister">S'enregistrer :</p>
            <div class="civility">
                <label for="mister">
                    <input <?= !empty($_POST['civility']) ? $_POST['civility'] : '' ?> type="radio" id="mister" name="civility" value="0" />
                    M
                </label>

                <label for="miss">
                    <input <?= !empty($_POST['civility']) ? $_POST['civility'] : '' ?> type="radio" id="miss" name="civility" value="1" />
                    Mme
                </label>
                <?php if (!empty($error) && !empty($error['civility'])) { ?>
                    <small style="color: red;"><?= $error['civility'] ?></small>
                <?php } ?>
            </div>

            <div class="nameBox">

                <input <?= !empty($_POST['lastname']) ? $_POST['lastname'] : '' ?> class="inputName" type="text" name="lastname" id="lastname" placeholder="Nom" required />
                <?php if (!empty($error) && !empty($error['lastname'])) { ?>
                    <small style="color: red;"><?= $error['lastname'] ?></small>
                <?php } ?>


                <input <?= !empty($_POST['firstname']) ? $_POST['firstname'] : '' ?> class="inputName" type="text" name="firstname" id="firstname" placeholder="Prénom" required>
                <?php if (!empty($error) && !empty($error['firstname'])) { ?>
                    <small style="color: red;"><?= $error['firstname'] ?></small>
                <?php } ?>

            </div>
            

            <div class="inputBox label">
                    <label for="birthday"> Date de naissance :</label>
                    <input value="<?= !empty($_POST['birthday']) ? $_POST['birthday'] : '' ?>" class="inputRegister" type="date" name="birthday" id="birthday" placeholder="Prenom" required>
                    <?php if (!empty($error) && !empty($error['birthday'])) { ?>
                        <small style="color: red;"><?= $error['birthday'] ?></small>
                    <?php } ?>
                </div>

            <div class="inputBox">
                <div class="iconBox">
                    <ion-icon class="iconName" name="person-outline"></ion-icon>
                </div>
                <input value="<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>" class="inputRegister" type="email" name="email" id="email" placeholder="Email" required>
                <?php if (!empty($error) && !empty($error['email'])) { ?>
                    <small style="color: red;"><?= $error['email'] ?></small>
                <?php } ?>
            </div>
            <div class="inputBox">
                <div class="iconBox">
                    <ion-icon class="iconLock" name="lock-closed-outline"></ion-icon>
                </div>
                <input class=inputRegister type="password" name="password" id="password" placeholder="Mot de passe" required>
                <?php if (!empty($error) && !empty($error['password'])) { ?>
                    <small style="color: red;"><?= $error['password'] ?></small>
                <?php } ?>
            </div>
            <div class="inputBox">
                <div class="iconBox">
                    <ion-icon class="iconPhone" name="call-outline"></ion-icon>
                </div>
                <input <?= !empty($_POST['phone_number']) ? $_POST['phone_number'] : '' ?> class="inputRegister" type="text" name="phone_number" id="phone" placeholder="Mobile" required />
                <?php if (!empty($error) && !empty($error['phone_number'])) { ?>
                    <small style="color: red;"><?= $error['phone_number'] ?></small>
                <?php } ?>
            </div>
            <button class="btnRegister" name="type" value="create">ENREGISTRER</button>
            </div>
        </form>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
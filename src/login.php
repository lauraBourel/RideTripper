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
    <!-- main section containing the login form -->
    <main>
        <form method="POST" class="log">
            <p class="txtLog">Se connecter :</p>
            <!-- Email input field -->
            <div class="inputBox">
                <div class="iconBox">
                    <ion-icon class="iconName" name="person-outline"></ion-icon>
                </div>
                <input type="text" name="login_email" id="name" placeholder="Email" />
                <!-- Display error message if email is invalid -->
                <?php if (!empty($error) && !empty($error['login_email'])) { ?>
                    <small style="color: red;"><?= $error['login_email'] ?></small>
                <?php } ?>
            </div>
            <!-- Password input field -->
            <div class="inputBox">
                <div class="iconBox">
                    <ion-icon class="iconLock" name="lock-closed-outline"></ion-icon>
                </div>
                <input type="password" name="login_password" id="password" placeholder="Mot de passe" />
                <!-- Display error message if password is invalid -->
                <?php if (!empty($error) && !empty($error['login_password'])) { ?>
                    <small style="color: red;"><?= $error['login_password'] ?></small>
                <?php } ?>
            </div>
            <div class="saveForgot">
                <!-- "Remember Me" checkbox and label -->
                <div class="rememberMe">
                    <input type="checkbox" id="rememberMe" name="rememberMe" checked />
                    <label for="rememberMe" class="rememberMe">Se souvenir de moi</label>
                </div>
                <!-- "Forgot Password" link -->
                <a class="forgotPassword" href="">Mot de passe oublié ?</a>
            </div>
            <!-- login button -->
            <button class="btnLog" name="type" type="submit" value="login">CONNEXION</button>
        </form>


        <!-- main section containing the register form -->
        <form method="POST" class="register">
            <div class="registerInfo">
                <p class="txtRegister">S'enregistrer :</p>

                <!-- Civility selection with radio buttons -->
                <div class="civility">
                    <!-- Radio button for selecting "Mister" -->
                    <label for="mister">
                        <input value="<?= !empty($_POST['civility']) ? $_POST['civility'] : '' ?>" type="radio" id="mister" name="civility" value="0" />
                        M
                    </label>
                    <!-- Radio button for selecting "Miss" -->
                    <label for="miss">
                        <input value="<?= !empty($_POST['civility']) ? $_POST['civility'] : '' ?>" type="radio" id="miss" name="civility" value="1" />
                        Mme
                    </label>
                    <!-- Display error message if civility selection is invalid -->
                    <?php if (!empty($error) && !empty($error['civility'])) { ?>
                        <small style="color: red;"><?= $error['civility'] ?></small>
                    <?php } ?>
                </div>

                <div class="nameBox">
                    <!-- Lastname input field -->
                    <input value="<?= !empty($_POST['lastname']) ? $_POST['lastname'] : '' ?>" class="inputName" type="text" name="lastname" id="lastname" placeholder="Nom" required />
                    <!-- Display error message if lastname is invalid -->
                    <?php if (!empty($error) && !empty($error['lastname'])) { ?>
                        <small style="color: red;"><?= $error['lastname'] ?></small>
                    <?php } ?>

                    <!-- Firstname input field -->
                    <input value="<?= !empty($_POST['firstname']) ? $_POST['firstname'] : '' ?>" class="inputName" type="text" name="firstname" id="firstname" placeholder="Prénom" required>
                    <!-- Display error message if firstname is invalid -->
                    <?php if (!empty($error) && !empty($error['firstname'])) { ?>
                        <small style="color: red;"><?= $error['firstname'] ?></small>
                    <?php } ?>

                </div>

                <!-- Birthday input field -->
                <div class="inputBox label">
                    <label for="birthday"> Date de naissance :</label>
                    <input value="<?= !empty($_POST['birthday']) ? $_POST['birthday'] : '' ?>" class="inputRegister" type="date" name="birthday" id="birthday" placeholder="Prenom" required>
                    <!-- Display error message if birthday is invalid -->
                    <?php if (!empty($error) && !empty($error['birthday'])) { ?>
                        <small style="color: red;"><?= $error['birthday'] ?></small>
                    <?php } ?>
                </div>
                <!-- Email input field -->
                <div class="inputBox">
                    <div class="iconBox">
                        <ion-icon class="iconName" name="person-outline"></ion-icon>
                    </div>
                    <input value="<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>" class="inputRegister" type="email" name="email" id="email" placeholder="Email" required>
                    <!-- Display error message if email is invalid -->
                    <?php if (!empty($error) && !empty($error['email'])) { ?>
                        <small style="color: red;"><?= $error['email'] ?></small>
                    <?php } ?>
                </div>
                <!-- Password input field -->
                <div class="inputBox">
                    <div class="iconBox">
                        <ion-icon class="iconLock" name="lock-closed-outline"></ion-icon>
                    </div>
                    <input class=inputRegister type="password" name="password" id="password" placeholder="Mot de passe" required>
                    <!-- Display error message if password is invalid -->
                    <?php if (!empty($error) && !empty($error['password'])) { ?>
                        <small style="color: red;"><?= $error['password'] ?></small>
                    <?php } ?>
                </div>
                <!-- Phone-number input field -->
                <div class="inputBox">
                    <div class="iconBox">
                        <ion-icon class="iconPhone" name="call-outline"></ion-icon>
                    </div>
                    <input value="<?= !empty($_POST['phone_number']) ? $_POST['phone_number'] : '' ?>" class="inputRegister" type="text" name="phone_number" id="phone" placeholder="Mobile" required />
                    <!-- Display error message if phone-number is invalid -->
                    <?php if (!empty($error) && !empty($error['phone_number'])) { ?>
                        <small style="color: red;"><?= $error['phone_number'] ?></small>
                    <?php } ?>
                </div>
                <!-- register button -->
                <button class="btnRegister" name="type" value="create">ENREGISTRER</button>
            </div>
        </form>
    </main>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
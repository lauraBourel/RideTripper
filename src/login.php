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

    <nav>
        <div id="menuBurger" class="menuBurger">
            <div class="menu" id="menu">
                <ion-icon id="iconCross" class="iconCross" name="add"></ion-icon>
                <a class="linkUnderline" href="">EQUIPEMENT MOTO</a>
                <a class="linkUnderline" href="">VETEMENTS</a>
                <a class="linkUnderline" href="">ROADTRIP</a>
            </div>
            <ion-icon id="iconBurger" class="iconBurger" name="menu"></ion-icon>
        </div>
        <div class="navBar">
            <div class="logoLinkNav">
                <div class="navLogo">
                    <a href="index.php">
                        <img class="logo" src="assets/img/index/logoWhite.png" alt="logoridetripper">
                    </a>
                </div>
                <div class="navLink">
                    <a class="linkUnderline" id="equipmentNav" href="">EQUIPEMENT MOTO</a>
                    <a class="linkUnderline" id="clothesNav" href="">VETEMENTS</a>
                    <a class="linkUnderline" href="">ROADTRIP</a>
                </div>
            </div>
            <div class="navCart">
                <div class="search">
                    <ion-icon class="icon" name="search-outline"></ion-icon>
                    <input class="searchBar" placeholder="Recherche... "></input>
                </div>
                <a href="login.php">
                    <ion-icon class="icon" name="person-outline"></ion-icon>
                </a>
                <ion-icon id=cartIcon class="icon cartIcon" name="cart-outline"></ion-icon>
            </div>
        </div>
        <div id="equipmentMenu">
            <a class="blackLink" href="">Vestes textile moto</a>
            <a class="blackLink" href="">Vestes cuir moto</a>
            <a class="blackLink" href="">Gants moto</a>
            <a class="blackLink" href="">Pantalons moto</a>
            <a class="blackLink" href="">Airbag moto</a>
            <a class="blackLink" href="">Protections</a>
            <a class="blackLink" href="">Combinaisons moto</a>
            <a class="blackLink" href="">Cagoules de moto</a>
        </div>
        <div id="clothesMenu">
            <a class="blackLink" href="">Vestes</a>
            <a class="blackLink" href="">Jerseys</a>
            <a class="blackLink" href="">T-shirts</a>
            <a class="blackLink" href="">Accessoires</a>
            <a class="blackLink" href="">Chaussettes</a>
            <a class="blackLink" href="">Cagoules</a>
            <a class="blackLink" href="">Sous-vêtements</a>
            <a class="blackLink" href="">Sweat-shirts</a>
            <a class="blackLink" href="">Bonnets</a>
        </div>
        <div id="popUpCart" class="popUpCart">
            <ion-icon class="iconCartPopUp" name="cart-outline"></ion-icon>
            <p class="cartMessage">Votre panier est vide.</p>
            <button id="btnClosePopUp">RETOUR A LA BOUTIQUE</button>
        </div>
    </nav>
    <main>
        <form method="POST" class="log">
            <p class="txtLog">Se connecter :</p>
            <div class="inputBox">
                <div class="iconBox">
                    <ion-icon class="iconName" name="person-outline"></ion-icon>
                </div>
                <input type="text" name="login_email" id="name" placeholder="Email" />
            </div>
            <div class="inputBox">
                <div class="iconBox">
                    <ion-icon class="iconLock" name="lock-closed-outline"></ion-icon>
                </div>
                <input type="password" name="login_password" id="password" placeholder="Mot de passe" />
            </div>
            <div class="saveForgot">
                <div class="rememberMe">
                    <input type="checkbox" id="rememberMe" name="rememberMe" checked />
                    <label for="rememberMe" class="rememberMe">Se souvenir de moi</label>
                </div>
                <a class="forgotPassword" href="">Mot de passe oublié ?</a>
            </div>
            <button class="btnLog" name="type" value="login">CONNEXION</button>
        </form>

        <form method="POST" class="register">
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


                <input <?= !empty($_POST['firstname']) ? $_POST['firstname'] : '' ?> class="inputName" type="text" name="firstname" id="firstname"placeholder="Prénom" required>
                <?php if (!empty($error) && !empty($error['firstname'])) { ?>
                <small style="color: red;"><?= $error['firstname'] ?></small>
                <?php } ?>

            </div>
            <label class="bdayDate"> Date de naissance :
            <input <?= !empty($_POST['birthday']) ? $_POST['birthday'] : '' ?> class="inputBday" type="date" name="birthday" id="bday"required />
                <?php if (!empty($error) && !empty($error['birthday'])) { ?>
                    <small style="color: red;"><?= $error['birthday'] ?></small>
                <?php } ?> 
            </label>
            <div class="inputBoxR">
                <div class="iconBox">
                    <ion-icon class="iconName" name="person-outline"></ion-icon>
                </div>



                <input value="<?= !empty($_POST['email']) ? $_POST['email'] : '' ?>"   class="inputRegister" type="email" name="email" id="email" placeholder="Email" required>
                <?php if (!empty($error) && !empty($error['email'])) { ?>
                <small style="color: red;"><?= $error['email'] ?></small>
                <?php } ?>



            </div>
            <div class="inputBoxR">
                <div class="iconBox">
                    <ion-icon class="iconLock" name="lock-closed-outline"></ion-icon>
                </div>
                <input class=inputRegister type="password" name="password" id="password" placeholder="Mot de passe" required>
                <?php if (!empty($error) && !empty($error['password'])) { ?>
                <small style="color: red;"><?= $error['password'] ?></small>
                <?php } ?>
            </div>
            <div class="inputBoxR">
                <div class="iconBox">
                    <ion-icon class="iconPhone" name="call-outline"></ion-icon>
                </div>
                <input <?= !empty($_POST['phone_number']) ? $_POST['phone_number'] : '' ?> class="inputRegister" type="text" name="phone_number" id="phone" placeholder="Mobile" required />
                <?php if (!empty($error) && !empty($error['phone_number'])) { ?>
                    <small style="color: red;"><?= $error['phone_number'] ?></small>
                <?php } ?>
            </div>
            <button class="btnRegister" name="type" value="create">ENREGISTRER</button>
        </form>
    </main>













    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
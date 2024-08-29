<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Ride Tripper</title>
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
                <a href="account.php">
                    <ion-icon class="icon" name="person-outline"></ion-icon>
                </a>
                <ion-icon id=cartIcon class="icon cartIcon" name="cart-outline"></ion-icon>
            </div>
        </div>
        <div id="popUpCart" class="popUpCart">
            <ion-icon class="iconCartPopUp" name="cart-outline"></ion-icon>
            <p class="cartMessage">Votre panier est vide.</p>
            <button id="btnClosePopUp">RETOUR A LA BOUTIQUE</button>
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
    </nav>
    <main>
        <div class="middle">
            <p>VESTE MOTO FEMME EN CUIR</p>
            <p>HOMOLOGUEE AA - RISE</p>
            <button class="glowOnHover">VOIR</button>
        </div>
    </main>
    <div class="infoBar"></div>

















    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
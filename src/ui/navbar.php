<nav id="menu">
    <button id="iconBurger">
        <div></div>
    </button>
    <div class="left">
        <a class="logo" href="index.php">
            <img src="assets/img/index/logoWhiteNew.png" alt="logoridetripper">
        </a>
        <div>
            <div class="links">
                <a href="">EQUIPEMENT MOTO</a>
                <div class="link-menu">
                    <a class="blackLink" href="">Vestes textile moto</a>
                    <a class="blackLink" href="">Vestes cuir moto</a>
                    <a class="blackLink" href="">Gants moto</a>
                    <a class="blackLink" href="">Pantalons moto</a>
                    <a class="blackLink" href="">Airbag moto</a>
                    <a class="blackLink" href="">Protections</a>
                    <a class="blackLink" href="">Combinaisons moto</a>
                    <a class="blackLink" href="">Cagoules de moto</a>
                    <ion-icon class="link-menu-close" name="arrow-back-outline"></ion-icon>
                </div>
            </div>
            <div class="links">
                <a href="">VETEMENTS</a>
                <div class="link-menu">
                    <a class="blackLink" href="">Vestes</a>
                    <a class="blackLink" href="">Jerseys</a>
                    <a class="blackLink" href="">T-shirts</a>
                    <a class="blackLink" href="">Accessoires</a>
                    <a class="blackLink" href="">Chaussettes</a>
                    <a class="blackLink" href="">Cagoules</a>
                    <a class="blackLink" href="">Sous-vêtements</a>
                    <a class="blackLink" href="">Sweat-shirts</a>
                    <a class="blackLink" href="">Bonnets</a>
                    <ion-icon class="link-menu-close" name="arrow-back-outline"></ion-icon>
                </div>
            </div>
            <a href="">ROADTRIP</a>
        </div>
    </div>
    <div class="rigth">
        <div id="search-box" class="search">
            <ion-icon id="search-target" name="search-outline"></ion-icon>
            <input id="search-input" type="text" placeholder="Recherche...">
            <ion-icon id="search-close" name="close-outline"></ion-icon>
        </div>
        <a href="<?= !empty($_SESSION['id']) ? 'account.php' : 'login.php' ?>">
            <ion-icon name="person-outline" role="img"></ion-icon>
        </a>
        <button id="cart-btn"><ion-icon name="cart-outline" role="img"></ion-icon></button>
    </div>
    <div id="cart" class="empty">
        <p>Votre panier est vide</p>
        <ion-icon id=cartIcon class="icon cartIcon" name="cart-outline"></ion-icon>
        <button id="cart-close" class="custom">RETOUR A LA BOUTIQUE</button>
    </div>
</nav>
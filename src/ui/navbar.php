<?php require __DIR__ . '/../controllers/navCtrl.php' ?>
<nav id="menu">
    <!-- Burger icon for the menu -->
    <button id="iconBurger">
        <div></div>
    </button>
    <!-- Left section of the navigation -->
    <div class="left">
        <!-- Logo with a link to the homepage -->
        <a class="logo" href="index.php">
            <img src="assets/img/index/logoWhiteNew.png" alt="logoridetripper">
        </a>
        <div>
            <!-- Loop through each category in categories -->
            <?php foreach ($categories as $category) { ?>
                <div class="links">
                    <!-- Link to category items -->
                    <a class="links-cat" href="items.php?type=cat&id=<?= $category->id ?>"><?= strtoupper($category->name) ?></a>
                    <div class="link-menu">
                        <!-- Loop through each subcategory for the current category -->
                        <?php foreach ($sortedSubcategories[$category->id] as $subcategory) { ?>
                            <!-- Link to subcategory items -->
                            <a id="cat<?= $subcategory->id ?>" class="blackLink" href="items.php?type=subcat&id=<?= $subcategory->id ?>">
                                <?= $subcategory->name ?>
                            </a>
                        <?php } ?>
                        <!-- Close menu icon -->
                        <ion-icon class="link-menu-close" name="arrow-back-outline"></ion-icon>
                    </div>
                </div>
            <?php } ?>
            <!-- Link to Roadtrip page -->
            <a href="">ROADTRIP</a>
        </div>
    </div>
    <!-- Right section of the navigation bar -->
    <div class="rigth">
        <!-- Search box with open and close icons -->
        <div id="search-box" class="search">
            <ion-icon id="search-target" name="search-outline"></ion-icon>
            <input id="search-input" type="text" placeholder="Recherche...">
            <ion-icon id="search-close" name="close-outline"></ion-icon>
        </div>
        <!-- Account link, redirects to login if not signed in -->
        <a href="<?= !empty($_SESSION['id']) ? 'account.php' : 'login.php' ?>">
            <ion-icon name="person-outline" role="img"></ion-icon>
        </a>
        <!-- Cart button -->
        <button id="cart-btn"><ion-icon name="cart-outline" role="img"></ion-icon></button>
    </div>
    <!-- Cart section, initially empty -->
    <div id="cart" class="empty">
        <p>Votre panier est vide</p>
        <ion-icon id=cartIcon class="icon cartIcon" name="cart-outline"></ion-icon>
        <button id="cart-close" class="custom">RETOUR A LA BOUTIQUE</button>
    </div>
</nav>
<?php require __DIR__ . '/../controllers/navCtrl.php' ?>
<nav id="menu">
    <button id="iconBurger">
        <div></div>
    </button>
    <div class="left">
        <a class="logo" href="index.php">
            <img src="assets/img/index/logoWhiteNew.png" alt="logoridetripper">
        </a>
        <div>
            <?php foreach ($categories as $category) { ?>
                <div class="links">
                    <a class="links-cat" href="items.php?type=cat&id=<?= $category->id ?>"><?= strtoupper($category->name) ?></a>
                    <div class="link-menu">
                        <?php foreach ($sortedSubcategories[$category->id] as $subcategory) { ?>
                            <a id="cat<?= $subcategory->id ?>" class="blackLink" href="items.php?type=subcat&id=<?= $subcategory->id ?>">
                                <?= $subcategory->name ?>
                            </a>
                        <?php } ?>
                        <ion-icon class="link-menu-close" name="arrow-back-outline"></ion-icon>
                    </div>
                </div>
            <?php } ?>
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

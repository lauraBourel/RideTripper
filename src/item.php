<?php require_once 'controllers/itemCtrl.php'  ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/item.css">
    <title>Article</title>
</head>

<body>
    <?php require './ui/navbar.php' ?>
    <main>
        <h1><?= $oneItemData->name ?></h1>
        <div class="sectionItem">
            <section>
                <img class="itemImg" src="\assets\img\gants.jpg" alt="Gants moto">
            </section>
            <section class="itemDetails">
                <div class="updateItem">
                    <a class="openModal" target-modal="delete">
                        <ion-icon class="updateIcon" name="trash-outline"></ion-icon>
                    </a>
                    <a href="updateItem.php?id=<?= $oneItemData->id ?>">
                        <ion-icon class="updateIcon" name="build-outline"></ion-icon>
                    </a>
                </div>
                <div class="itemDescription">
                    <?= $oneItemData->description ?>
                    <div class="itemPrice"><?= $oneItemData->price ?>€</div>
                    <div>
                        <input type="button" value="-">
                        <input type="number" name="quantity" value="1" aria-label="Quantité de produits" size="4" min="1" max="7" step="1" placeholder="" inputmode="numeric" autocomplete="off">
                        <input type="button" value="+">
                    </div>
                    <button class="custom secondary" name="type">AJOUTER AU PANIER</button>
                </div>
            </section>
        </div>
    </main>


    <?php
    $idModal = 'delete';
    $title = 'Voulez vous supprimez ?';

    ob_start(); ?>
    <p>Cette suppression est definitif</p>
    <?php $content = ob_get_clean();

    ob_start(); ?>
    <button class="custom primary closeModal" target-modal="<?= $idModal ?>">Annuler</button>
    <a href="deletItem.php?id=<?= $oneItemData->id ?>" class="custom secondary">Valider</a>
    <?php
    $actions = ob_get_clean();

    require './ui/modal.php';
    require './ui/footer.php';
    ?>

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
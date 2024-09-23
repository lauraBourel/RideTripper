<?php require_once 'controllers/itemsCtrl.php'  ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/items.css">
    <title>Equipement Moto</title>
</head>

<body>
    <!-- Display Navbar -->
    <?php require './ui/navbar.php' ?>
    <main>

    <!-- Display Category Name -->
        <h1><?= $cat->name ?></h1>

    <!-- Display Items with Details  -->
        <div class="itemsBox">
            <?php if ($dataItem) { ?>
                <?php foreach ($dataItem as $item) { ?>
                    <div class="itemCard">
                        <img class="itemImg" src="\assets\img\gants.jpg" alt="Gants moto">
                        <div class="itemCardDescription"><?= $item->name ?>
                            <div class="price"><?= $item->price ?>€</div>
                        </div>
                    </div>
                <?php } ?>
            <?php } else { ?>
                <h2>Aucun article dans cette categorie</h2>
            <?php } ?>
        </div>
    </main>










    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
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
    <?php require './ui/navbar.php' ?>
    <main>
        <h1><?= $cat->name ?></h1>

        <?php foreach ($categories as $category) { ?>
            <div class="links">
                <a href="items.php?type=cat&id=<?= $category->id ?>"><?= strtoupper($category->name) ?></a>
                <div class="link-menu">
                    <?php foreach ($sortedSubcategories[$category->id] as $subcategory) { ?>
                        <a class="blackLink" href="items.php?type=subcat&id=<?= $subcategory->id ?>">
                            <?= $subcategory->name ?>
                        </a>
                    <?php } ?>
                    <ion-icon class="link-menu-close" name="arrow-back-outline"></ion-icon>
                </div>
            </div>
        <?php } ?>


        <!-- <?php if ($catData) { ?> -->
        <!-- <?php foreach ($catData as $cat) { ?> -->
        <!-- <div class="itemCard">
                        <img class="itemImg" src="\assets\img\gants.jpg" alt="Gants moto">
                        <div class="itemCardDescription"><?= $cat->name ?> -->
        <!-- </div>
                    </div> -->
        <!-- <?php } ?>
            <?php } else { ?>
                <h2>Aucune categorie trouvée</h2>
            <?php } ?> -->




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
        <form method="POST" class="register">
            <p class="txtRegister">Enregistrer un article :</p>
            <div class="nameBox">
                <input <?= !empty($_POST['name']) ? $_POST['name'] : '' ?> class="inputName" type="text" name="name" id="name" placeholder="Nom article" required />
                <?php if (!empty($error) && !empty($error['name'])) { ?>
                    <small style="color: red;"><?= $error['name'] ?></small>
                <?php } ?>
            </div>

            <div class="nameBox">
                <input <?= !empty($_POST['description']) ? $_POST['description'] : '' ?> class="inputName" type="text" name="description" id="description" placeholder="Description article" required />
                <?php if (!empty($error) && !empty($error['description'])) { ?>
                    <small style="color: red;"><?= $error['description'] ?></small>
                <?php } ?>
            </div>

            <div class="nameBox">
                <input <?= !empty($_POST['price']) ? $_POST['price'] : '' ?> class="inputName" type="text" name="price" id="price" placeholder="Prix article" required />
                <?php if (!empty($error) && !empty($error['price'])) { ?>
                    <small style="color: red;"><?= $error['price'] ?></small>
                <?php } ?>
            </div>

            <div class="nameBox">
                <input <?= !empty($_POST['quantity']) ? $_POST['quantity'] : '' ?> class="inputName" type="text" name="quantity" id="quantity" placeholder="Quantité article" required />
                <?php if (!empty($error) && !empty($error['quantity'])) { ?>
                    <small style="color: red;"><?= $error['quantity'] ?></small>
                <?php } ?>
            </div>

            <div class="nameBox">
                <input <?= !empty($_POST['id_subcategory']) ? $_POST['id_subcategory'] : '' ?> class="inputName" type="text" name="id_subcategory" id="id_subcategory" placeholder="Categorie article" required />
                <?php if (!empty($error) && !empty($error['id_subcategory'])) { ?>
                    <small style="color: red;"><?= $error['id_subcategory'] ?></small>
                <?php } ?>
            </div>

            <button class="btnRegister" name="type" value="create">ENREGISTRER ARTICLE</button>
        </form>
    </main>










    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
<?php require_once 'controllers/updateItemCtrl.php'  ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/updateItem.css">
    <title>Ajout d'articles</title>
</head>

<body>
    <!-- Display Navbar -->
    <?php require './ui/navbar.php' ?>

    <main>
        <!-- Form for updating an article -->
        <form method="POST" class="update">
            <div class="infoUpdate">
                <p class="txtUpdate">Modifier un article :</p>
                <!-- Input for the article name -->
                <label for="name">Nom :</label>
                <div class="nameBox">
                    <input value="<?= $name ?>" class="inputName" type="text" name="name" id="name" placeholder="Nom article" required />
                    <!-- Display error message if the article name is invalid -->
                    <?php if (!empty($error) && !empty($error['name'])) { ?>
                        <small style="color: red;"><?= $error['name'] ?></small>
                    <?php } ?>
                </div>
                <!-- Input for the article description -->
                <label for="description">Description :</label>
                <div class="descriptionBox">
                    <textarea
                        class="inputDescription" type="text" name="description" id="description" placeholder="Description article" required><?= $description ?></textarea>
                    <!-- Display error message if the article description is invalid -->
                    <?php if (!empty($error) && !empty($error['description'])) { ?>
                        <small style="color: red;"><?= $error['description'] ?></small>
                    <?php } ?>
                </div>
                <!-- Input for the article price -->
                <label for="price">Prix :</label>
                <div class="nameBox">
                    <input value="<?= $price ?>" class="inputName" type="text" name="price" id="price" placeholder="Prix article" required />
                    <!-- Display error message if the article price is invalid -->
                    <?php if (!empty($error) && !empty($error['price'])) { ?>
                        <small style="color: red;"><?= $error['price'] ?></small>
                    <?php } ?>
                </div>
                <!-- Input for the article quantity -->
                <label for="quantity">Quantité :</label>
                <div class="nameBox">
                    <input value="<?= $quantity ?>" class="inputName" type="text" name="quantity" id="quantity" placeholder="Quantité article" required />
                    <!-- Display error message if the article quantity is invalid -->
                    <?php if (!empty($error) && !empty($error['quantity'])) { ?>
                        <small style="color: red;"><?= $error['quantity'] ?></small>
                    <?php } ?>
                </div>
                <!-- Input for the article id of subcategory -->
                <label for="id_subcategory">Numéro de sous catégorie :</label>
                <div class="nameBox">
                    <input value="<?= $id_subcategory ?>" class="inputName" type="text" name="id_subcategory" id="id_subcategory" placeholder="Categorie article" required />
                    <!-- Display error message if the article id of subcategory is invalid -->
                    <?php if (!empty($error) && !empty($error['id_subcategory'])) { ?>
                        <small style="color: red;"><?= $error['id_subcategory'] ?></small>
                    <?php } ?>
                </div>
                <!-- Update button  -->
                <button class="btnUpdate" name="type" value="update">ENREGISTRER MODIFICATION</button>
        </form>
        </div>
    </main>










    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
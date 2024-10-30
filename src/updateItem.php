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
        <!-- Display Form for Register  -->
        <form method="POST" class="update">
            <div class="infoUpdate">
                <p class="txtUpdate">Modifier un article :</p>
                <div class="nameBox">
                    <input value="<?= $name ?>" class="inputName" type="text" name="name" id="name" placeholder="Nom article" required />
                    <?php if (!empty($error) && !empty($error['name'])) { ?>
                        <small style="color: red;"><?= $error['name'] ?></small>
                    <?php } ?>
                </div>

                <div class="descriptionBox">
                    <textarea
                        class="inputDescription" type="text" name="description" id="description" placeholder="Description article" required><?= $description ?></textarea>
                    <?php if (!empty($error) && !empty($error['description'])) { ?>
                        <small style="color: red;"><?= $error['description'] ?></small>
                    <?php } ?>
                </div>

                <div class="nameBox">
                    <input value="<?= $price ?>" class="inputName" type="text" name="price" id="price" placeholder="Prix article" required />
                    <?php if (!empty($error) && !empty($error['price'])) { ?>
                        <small style="color: red;"><?= $error['price'] ?></small>
                    <?php } ?>
                </div>

                <div class="nameBox">
                    <input value="<?= $quantity ?>" class="inputName" type="text" name="quantity" id="quantity" placeholder="Quantité article" required />
                    <?php if (!empty($error) && !empty($error['quantity'])) { ?>
                        <small style="color: red;"><?= $error['quantity'] ?></small>
                    <?php } ?>
                </div>

                <div class="nameBox">
                    <input value="<?= $id_subcategory ?>" class="inputName" type="text" name="id_subcategory" id="id_subcategory" placeholder="Categorie article" required />
                    <?php if (!empty($error) && !empty($error['id_subcategory'])) { ?>
                        <small style="color: red;"><?= $error['id_subcategory'] ?></small>
                    <?php } ?>
                </div>
                <button class="btnUpdate" name="type" value="update">MODIFIER ARTICLE</button>
        </form>
        </div>
    </main>










    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
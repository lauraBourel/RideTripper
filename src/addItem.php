<?php require_once 'controllers/addItemCtrl.php'  ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/addItem.css">
    <title>Ajout d'articles</title>
</head>

<body>
    <!-- Display Navbar -->
    <?php require './ui/navbar.php' ?>

    <!-- Main section containing the registration form for an item -->
    <main>
        <form method="POST" class="register">
            <div class="infoRegister">
                <p class="txtRegister">Enregistrer un article :</p>
                <!-- Input for the name -->
                <div class="nameBox">
                    <input value="<?= !empty($_POST['name']) ? $_POST['name'] : '' ?>" class="inputName" type="text" name="name" id="name" placeholder="Nom article" required />
                    <!-- Display error message if the item name is invalid -->
                    <?php if (!empty($error) && !empty($error['name'])) { ?>
                        <small style="color: red;"><?= $error['name'] ?></small>
                    <?php } ?>
                </div>

                <div class="descriptionBox">
                    <!-- Input for the description -->
                    <textarea
                        class="inputDescription" type="text" name="description" id="description" placeholder="Description article" required><?= !empty($_POST['description']) ? $_POST['description'] : '' ?></textarea>
                    <!-- Display error message if the description is invalid -->
                    <?php if (!empty($error) && !empty($error['description'])) { ?>
                        <small style="color: red;"><?= $error['description'] ?></small>
                    <?php } ?>
                </div>

                <div class="nameBox">
                    <!-- Input for the price -->
                    <input value="<?= !empty($_POST['price']) ? $_POST['price'] : '' ?>" class="inputName" type="text" name="price" id="price" placeholder="Prix article" required />
                    <!-- Display error message if the price is invalid -->
                    <?php if (!empty($error) && !empty($error['price'])) { ?>
                        <small style="color: red;"><?= $error['price'] ?></small>
                    <?php } ?>
                </div>

                <div class="nameBox">
                    <!-- Input for the quantity -->
                    <input value="<?= !empty($_POST['quantity']) ? $_POST['quantity'] : '' ?>" class="inputName" type="text" name="quantity" id="quantity" placeholder="Quantité article" required />
                    <!-- Display error message if the quantity is invalid -->
                    <?php if (!empty($error) && !empty($error['quantity'])) { ?>
                        <small style="color: red;"><?= $error['quantity'] ?></small>
                    <?php } ?>
                </div>
                <!-- <div>
                    <h2>Sous-catégories :</h2>
                    <li>1 Vestes textile moto </li>
                    <li>2 Vestes cuir moto</li>
                    <li>3 Gants moto</li>
                    <li>4 Pantalons moto</li>
                    <li>5 Air bag moto</li>
                    <li>6 Protections</li>
                    <li>7 Combinaisons moto</li>
                    <li>8 Cagoules de moto</li>
                    <li>9 Vestes</li>
                    <li>10 Jerseys</li>
                    <li>11 T-shirts</li>
                    <li>12 Accessoires</li>
                    <li>13 Chaussettes</li>
                    <li>14 Cagoules</li>
                    <li>15 Sous-vêtements</li>
                    <li>16 Sweat-shirts</li>
                    <li>17 Bonnets</li>
                    <li>18 Casquettes et Bobs</li>
                </div> -->
                <div class="nameBox">
                    <!-- Input for the id subcategory -->
                    <input value="<?= !empty($_POST['id_subcategory']) ? $_POST['id_subcategory'] : '' ?>" class="inputName" type="text" name="id_subcategory" id="id_subcategory" placeholder="Numéro sous-categorie" required />
                    <!-- Display error message if the id subcategory is invalid -->
                    <?php if (!empty($error) && !empty($error['id_subcategory'])) { ?>
                        <small style="color: red;"><?= $error['id_subcategory'] ?></small>
                    <?php } ?>
                </div>
                <!-- Register item button  -->
                <button class="btnRegister" name="type" value="create">ENREGISTRER ARTICLE</button>
        </form>
        </div>
    </main>







    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
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

    <main>
        <!-- Display Form for Register  -->
        <form method="POST" class="register">
            <div class="infoRegister">
                <p class="txtRegister">Enregistrer un article :</p>
                <div class="nameBox">
                    <input <?= !empty($_POST['name']) ? $_POST['name'] : '' ?> class="inputName" type="text" name="name" id="name" placeholder="Nom article" required />
                    <?php if (!empty($error) && !empty($error['name'])) { ?>
                        <small style="color: red;"><?= $error['name'] ?></small>
                    <?php } ?>
                </div>

                <div class="descriptionBox">
                    <textarea
                    <?= !empty($_POST['description']) ? $_POST['description'] : '' ?> class="inputDescription" type="text" name="description" id="description" placeholder="Description article" required >
                    </textarea>
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
        </div>
    </main>







    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>
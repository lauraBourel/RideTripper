<?php require_once 'controllers/deletCtrl.php'  ?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suppression</title>
</head>

<body>

    <h1><?= $message ?></h1>
    <script>
        //  Redirect to the homepage after 10 seconds
        document.addEventListener('DOMContentLoaded', () => {
            setTimeout(() => {
                document.location.href = "/";
            }, 10000);
        });
    </script>
</body>

</html>
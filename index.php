<?php
define('__CONFIG__', true);
require_once "inc/config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.24/dist/css/uikit.min.css" />
    <title>Document</title>
</head>

<body>
    <div class="uk-container uk-section">
        <?php
        echo "Hello World. Today is: ";
        echo Date('Y m d');
        ?>
        <p>
            <a href="/login.php">Login</a>
            <a href="/register.php">Register</a>
        </p>
    </div>


    <?php require_once 'inc/footer.php'; ?>
</body>

</html>
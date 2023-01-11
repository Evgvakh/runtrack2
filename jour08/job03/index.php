<?php

session_start();

if (!isset($_SESSION['name'])) {
    $_SESSION['name'] = [];
}

if (isset($_POST['reset'])) {
    $_SESSION['name'] = [];
    $_POST['reset'] = '';
}

if (
    isset($_POST['prenom']) && 
    $_POST['prenom'] != '' && 
    $_POST['prenom'] !== end($_SESSION['name'])
    ) {
    array_push($_SESSION['name'], $_POST['prenom']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul {
            list-style: none;
        }

        li {
            margin: 1em 0;
        }

        form {
            margin-bottom: 1em;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="prenom" id="">
        <input type="submit">
    </form>
    <form action="" method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
    <div>
        <ul>
            <?php
            foreach ($_SESSION['name'] as $key => $val): ?>
                <li><b><?= $key + 1 ?></b>: <?= $val ?></li>
            <?php endforeach ?>
        </ul>
    </div>
</body>

</html>
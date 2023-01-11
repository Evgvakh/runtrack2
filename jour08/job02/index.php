<?php
if (!isset($_COOKIE['counter'])) {
    setcookie('counter', 0);
} elseif (isset($_COOKIE['counter'])) {
    setcookie('counter', $_COOKIE['counter'] + 1);
}

if (isset($_POST['reset'])) {
    if ($_POST['reset'] === 'Reset') {
    setcookie('counter', 0);
    $_POST['reset'] === '';
    header('Location: http://localhost/runtrack2/jour08/job02/');
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div>
        <h2>
            <?=(int) $_COOKIE['counter']?>
        </h2>
        <form method="post">
            <input type="submit" value="Reset" name="reset">
        </form>
    </div>
</body>

</html>
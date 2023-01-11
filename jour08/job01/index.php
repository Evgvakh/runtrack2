<?php

session_start();

if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;    
} else {
    $_SESSION['counter']++;
}

if (isset($_POST['reset'])) {
    session_unset();
    session_destroy();
    header('Location: http://localhost/runtrack2/jour08/job01/');
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
            <?= $_SESSION['counter']?>
        </h2>
        <form method="post">
            <input type="submit" value="Reset" name="reset">
        </form>
    </div>
</body>

</html>
<?php

if (isset($_POST['username']) && $_POST['username'] != '') {
    setcookie('username', $_POST['username']);
    $name = $_POST['username'];
    $_POST['username'] = '';
    session_start();
}

if (isset($_POST['quit']) && $_POST['quit'] == 'QUIT') {    
    setcookie('username', '', -100);
    session_abort();
    $_POST['quit'] = '';
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
    
    <?php if (!isset($_SESSION)): ?>
        <div>
            <form action="" method="post">
                <input type="text" name="username">
                <input type="submit" name="submit">
            </form>
        </div>
    <?php else: ?>
        <div>
            <h1>Hello, <?=$name?></h1>
            <form action="" method="post">
                <input type="submit" name="quit" value="QUIT">
            </form>
        </div>
    <?php endif; ?>
</body>
</html>
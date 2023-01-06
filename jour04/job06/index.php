<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/runtrack2/jour04/job06/" method="get">
        <input type="text" name="nombre">
        <input type="submit" value="SEND">
    </form>

    <div>
        <?php
            if (isset($_GET['nombre'])) {
                if ($_GET['nombre'] % 2 == 0): ?>
                <h2>Paire</h2>
                    <?php else: ?>
                        <h2>Impaire</h2>                         
            <?php endif;
        } ?>                   
    </div>
</body>
</html>
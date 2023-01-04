<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="Content-type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $str = "Les choses que l'on possède finissent par nous posséder";
    $newStr = explode(" ", $str);

    foreach ($newStr as $key => $val) {
        $newStr[$key] = strrev($val);    
    }

    $revArr = array_reverse($newStr);

    foreach ($newStr as $val): ?>
        
        <?= $val ?>
        <?php endforeach;
    ?>
</body>
</html>
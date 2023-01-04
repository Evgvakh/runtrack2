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
    
    /* 1
    for ($i = 1000000000000; $i >= 0; $i--) {
        if(isset($str[$i])) {
            echo $str[$i];
        }
    }
    */
    
    for ($i = 0; isset($str[$i]); $i++);
    for ($i; $i > 0; $i--) { echo $str[$i-1]; }    

    /* 3
    for ($i = -1; isset($str[$i]); $i--) { echo $str[$i]; };
    */

    /* 4
    $newStr = explode(" ", $str);
    
    foreach ($newStr as $key => $val) {
        $newStr[$key] = strrev($val);    
    }

    $revArr = array_reverse($newStr);

    foreach ($newStr as $val): ?>
        
        <?= $val ?>
        <?php endforeach;
    */
    

    ?>
</body>
</html>
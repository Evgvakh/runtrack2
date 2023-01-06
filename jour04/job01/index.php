<?php 
    $i = 0;    
    foreach ($_GET as $val) {
        if ($val != "") {
            $i++;
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
    <form action="http://localhost/runtrack2/jour04/job01/" method="get">
        <input type="text" name="user1" placeholder="username1">
        <input type="text" name="user2" placeholder="username2">
        <input type="text" name="user3" placeholder="username3">
        <input type="submit" value="SEND">
    </form>
    <div style="margin-top: 10px">Le nombre d’argument GET envoyé est : <?=$i?></div>
</body>
</html>


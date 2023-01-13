<?php 

$mysqli = new mysqli('localhost', 'root', '', 'jour09');

$result = $mysqli->query('SELECT nom, capacite FROM salles');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th, td {
                padding: 0.5em;
                border: 1px solid rgba(13, 13, 13, 0.5);
                text-align: center;
            } 
    </style>
</head>
<body>
    <table>
        <thead>
            <th>Nom</th>
            <th>Capacité</th>
        </thead>
        <tbody>
            <?php foreach ($result as $val): ?>
                <tr>
                    <td><?=$val['nom']?></td>
                    <td><?=$val['capacite']?></td>
                </tr>
            <?php endforeach;?>
        </tbody>
    </table>
</body>
</html>
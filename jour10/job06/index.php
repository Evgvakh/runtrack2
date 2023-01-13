<?php

$mysqli = new mysqli('localhost', 'root', '', 'jour09');

$result = $mysqli->query("SELECT COUNT(*) AS nb_etudiants FROM etudiants");

$result = $result->fetch_assoc();

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
            <th>Nombre d'etudiants</th>            
        </thead>
        <tbody>
            <tr>
                <td><?=$result['nb_etudiants']?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
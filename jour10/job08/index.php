<?php

$mysqli = new mysqli('localhost', 'root', '', 'jour09');

$result = $mysqli->query("SELECT SUM(capacite) AS capacite_totale FROM salles");

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
            <th>Capacité totale</th>            
        </thead>
        <tbody>
            <tr>
                <td><?=$result['capacite_totale']?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
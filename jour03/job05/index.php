<?php 
$str = "On n’est pas le meilleur quand on le croit mais quand on le sait";

$voyelles = ["a", "i", "e", "u", "o", "y"];
$consonnes = ["b", "c", "d", "f", "g", "h", "j", "k", "l", "m", "n", "p", "q", "r", "s", "t", "v", "w", "x", "z"];
$vCounter = 0;
$cCounter = 0;

for ($i = 0; $i < strlen($str); $i++) {
    if (in_array($str[$i], $voyelles)) {
        $vCounter++;
    } elseif (in_array($str[$i], $consonnes)) {
        $cCounter++;
    }
} ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-size: 18px;
        }

        table {
            margin: 50px 100px;
            border: 3px solid black;
        }

        th, td {
            padding: 0.5em;
            border:1px solid black;
            text-align: center;
        }

        th {
            border: 2px solid black; impotant !important
        }

    </style>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>Voyelles</th>
            <th>Consonnes</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?=$vCounter?></td>
            <td><?=$cCounter?></td>
        </tr>
    </tbody>
</table>
</body>
</html>


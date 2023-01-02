<?php 
    $boolVar = true;
    $numberVar = 6;
    $stringVar = 'String';
    $doubleVar = 2.34; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        tr, th, td {
            padding: 10px;
            border: 1px solid grey;
        }
    </style>
</head>
<body>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Type</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>$boolVar</th>
                    <td><?php echo gettype($boolVar)?></td>
                    <td><?php echo var_dump($boolVar)?></td>
                </tr>
                <tr>
                    <th>$numberVar</th>
                    <td><?php echo gettype($numberVar)?></td>                    
                    <td><?php echo $numberVar?></td>
                </tr>
                <tr>
                    <th>$stringVar</th>
                    <td><?php echo gettype($stringVar)?></td>                    
                    <td><?php echo $stringVar?></td>
                </tr>
                <tr>
                    <th>$doubleVar</th>
                    <td><?php echo gettype($doubleVar)?></td>                    
                    <td><?php echo $doubleVar?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>
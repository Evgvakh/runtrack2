<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            margin: 3em;
            border: 3px solid black;
        }

        td, th {
            padding: 0.5em;
            border: 1px solid black;
            text-align: center;
        }

    </style>
</head>
<body>
    <form action="http://localhost/runtrack2/jour04/job02/" method="get">
        <input type="text" name="user1" placeholder="username1">
        <input type="text" name="user2" placeholder="username2">
        <input type="text" name="user3" placeholder="username3">
        <input type="submit">
    </form>
    <div style="margin-top: 10px">
        <table>
            <thead>
                <tr>
                    <th>Argument</th>
                    <th>Valeur</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach ($_GET as $key => $val): ?>
                    <tr>
                        <td><?=$key?></td>
                        <td><?=$val?></td>
                    </tr>
                    <?php endforeach;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
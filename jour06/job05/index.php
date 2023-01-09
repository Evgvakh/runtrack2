<?php

if (!isset($_POST['styleselect'])) {
    $_POST['styleselect'] = "style1";}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=$_POST['styleselect']?>.css">
</head>
<body>
    
    <div>
        <form action="http://localhost/runtrack2/jour06/job05/" method="post">
            <select name="styleselect" id="">                
                <option value="style1" <?=$_POST['styleselect'] === 'style1' ? 'selected' : ''?>>Style 1</option>
                <option value="style2" <?=$_POST['styleselect'] === 'style2' ? 'selected' : ''?>>Style 2</option>
                <option value="style3" <?=$_POST['styleselect'] === 'style3' ? 'selected' : ''?>>Style 3</option>
            </select>
            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>
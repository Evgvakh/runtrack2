<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="http://localhost/runtrack2/jour04/job05/" method="post">
        <input type="text" name="username" placeholder="username">
        <input type="text" name="password" placeholder="password">
        <input type="submit" value="SEND">
    </form>    
        <?php  
            if (isset($_POST['username']) && isset($_POST['password'])) {
                if ($_POST['username'] == "John" && $_POST['password'] == "Rambo"): ?>                
                <div style="margin: 3em"><h2>C’est pas ma guerre</h2></div>
                <?php else:?>
                    <div style="margin: 3em"><h3>Votre pire cauchemar.</h3></div>
            <?php endif;
        }?>    
</body>
</html>
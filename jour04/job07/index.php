<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin:0;
            padding:0;
            box-sizing: border-box;
        }

        form, div {
            margin: 5em;
        }

    </style>
</head>
<body>
        <form action="http://localhost/runtrack2/jour04/job07/" method="get">
            <input type="text" name="largeur" placeholder="largeur">
            <input type="text" name="hauteur" placeholder="hauteur">            
            <input type="submit" value="SEND">
        </form>

    <div style="text-align: center">
        
        <?php
            if (isset($_GET['largeur']) && isset($_GET['largeur'])):
                for ($i = 0; $i < $_GET['hauteur']; $i++):
                    $innerContent = '<span>_</span>';                                       
                    $spanNumber = $i;
                    if ($spanNumber > $_GET['largeur']): 
                        $spanNumber = $_GET['largeur']; ?>
                        <p><span>|</span>
                            <?php for ($j = 0; $j < $spanNumber; $j++): ?>
                                <?=$innerContent?>
                            <?php endfor;?>
                        <span>|</span></p>
                        <?php else: ?>                            
                            <p><span>/</span> 
                                <?php while($spanNumber > 0):                                    
                                    echo $innerContent;                                    
                                    $spanNumber--;?>
                                <?php endwhile;?>
                            <span>\</span></p>
                    <?php endif; ?>     
                <?php endfor;?>
            <?php endif; 
        ?>    
    </div>
</body>
</html>
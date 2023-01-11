<?php
    session_start();

    if (!isset($_SESSION['player'])) {
        $_SESSION['player'] = 1;
    }    

    if (isset($_POST['reset']) && $_POST['reset'] === 'Reset') {
        session_unset();
        session_destroy();
        $_POST['reset'] = '';
        $_SESSION['player'] = 1;
    }

    if(isset($_POST['1']) && $_POST['1'] == '-' && $_SESSION['player'] == 1) {
        $_SESSION['val1'] = 'X';
        $_SESSION['player'] = 2;        
    } elseif (isset($_POST['1']) && $_POST['1'] == '-' && $_SESSION['player'] == 2) {
        $_SESSION['val1'] = 'O';
        $_SESSION['player'] = 1;       
    }

    if(isset($_POST['2']) && $_POST['2'] == '-' && $_SESSION['player'] == 1) {
        $_SESSION['val2'] = 'X';
        $_SESSION['player'] = 2;        
    } elseif (isset($_POST['2']) && $_POST['2'] == '-' && $_SESSION['player'] == 2) {
        $_SESSION['val2'] = 'O';
        $_SESSION['player'] = 1;       
    }

    if(isset($_POST['3']) && $_POST['3'] == '-' && $_SESSION['player'] == 1) {
        $_SESSION['val3'] = 'X';
        $_SESSION['player'] = 2;        
    } elseif (isset($_POST['3']) && $_POST['3'] == '-' && $_SESSION['player'] == 2) {
        $_SESSION['val3'] = 'O';
        $_SESSION['player'] = 1;       
    }

    if(isset($_POST['4']) && $_POST['4'] == '-' && $_SESSION['player'] == 1) {
        $_SESSION['val4'] = 'X';
        $_SESSION['player'] = 2;        
    } elseif (isset($_POST['4']) && $_POST['4'] == '-' && $_SESSION['player'] == 2) {
        $_SESSION['val4'] = 'O';
        $_SESSION['player'] = 1;       
    }

    if(isset($_POST['5']) && $_POST['5'] == '-' && $_SESSION['player'] == 1) {
        $_SESSION['val5'] = 'X';
        $_SESSION['player'] = 2;        
    } elseif (isset($_POST['5']) && $_POST['5'] == '-' && $_SESSION['player'] == 2) {
        $_SESSION['val5'] = 'O';
        $_SESSION['player'] = 1;       
    }

    if(isset($_POST['6']) && $_POST['6'] == '-' && $_SESSION['player'] == 1) {
        $_SESSION['val6'] = 'X';
        $_SESSION['player'] = 2;        
    } elseif (isset($_POST['6']) && $_POST['6'] == '-' && $_SESSION['player'] == 2) {
        $_SESSION['val6'] = 'O';
        $_SESSION['player'] = 1;       
    }

    if(isset($_POST['7']) && $_POST['7'] == '-' && $_SESSION['player'] == 1) {
        $_SESSION['val7'] = 'X';
        $_SESSION['player'] = 2;        
    } elseif (isset($_POST['7']) && $_POST['7'] == '-' && $_SESSION['player'] == 2) {
        $_SESSION['val7'] = 'O';
        $_SESSION['player'] = 1;       
    }

    if(isset($_POST['8']) && $_POST['8'] == '-' && $_SESSION['player'] == 1) {
        $_SESSION['val8'] = 'X';
        $_SESSION['player'] = 2;        
    } elseif (isset($_POST['8']) && $_POST['8'] == '-' && $_SESSION['player'] == 2) {
        $_SESSION['val8'] = 'O';
        $_SESSION['player'] = 1;       
    }

    if(isset($_POST['9']) && $_POST['9'] == '-' && $_SESSION['player'] == 1) {
        $_SESSION['val9'] = 'X';
        $_SESSION['player'] = 2;        
    } elseif (isset($_POST['9']) && $_POST['9'] == '-' && $_SESSION['player'] == 2) {
        $_SESSION['val9'] = 'O';
        $_SESSION['player'] = 1;       
    }

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
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: rgba(190, 235, 252, 0.6);
        }

        div {
            padding: 1em 2em;
            width: 43%;            
            margin: 0 auto;       
            text-align: center;     
        }

        h2 {
            margin-bottom: 1.2em;
            text-align: center;  
            color: rgb(13, 13, 13);          
        }

        table {
            width: 100%;
            border-spacing: 0.3em;
        }

        tr {
            width: 100%;
            height: fit-content;
        }

        td {
            border: 2px solid orange;
            text-align: center;
            width: 130px;
            height: 130px;            
        }

        form {
            display: block;
            width: 100%;
            height: 100%;
        }

        input.cell {
            display: block;
            width: 100%;
            height: 100%;
            padding: 2.2em 0;
            font-size: 20px;
            opacity: 0;
        }
        
        span {
            display: block;
            width: 100%;
            height: 100%;
            line-height: 1em;
            padding: 1em 0;
            font-size: 40px;
            font-weight: 700;
        }

        span.red {
            color: orangered;       
        }

        .reset {            
            padding: 1em 2em;
            margin: 0 auto;
            margin-top: 1em;
            margin-bottom: 1em;
            background-color: bisque;
            border: none;
            border-radius: 3px;
            color: rgb(13, 13, 13);
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
        }


    </style>
</head>

<body>

    <?php if (
        ((isset($_SESSION['val1']) && $_SESSION['val1'] === 'X') && 
        (isset($_SESSION['val2']) && $_SESSION['val2'] === 'X') && 
        (isset($_SESSION['val3']) && $_SESSION['val3'] === 'X')) ||

        ((isset($_SESSION['val1']) && $_SESSION['val1'] === 'X') && 
        (isset($_SESSION['val4']) && $_SESSION['val4'] === 'X') && 
        (isset($_SESSION['val7']) && $_SESSION['val7'] === 'X')) ||

        ((isset($_SESSION['val1']) && $_SESSION['val1'] === 'X') && 
        (isset($_SESSION['val5']) && $_SESSION['val5'] === 'X') && 
        (isset($_SESSION['val9']) && $_SESSION['val9'] === 'X')) ||

        ((isset($_SESSION['val2']) && $_SESSION['val2'] === 'X') && 
        (isset($_SESSION['val5']) && $_SESSION['val5'] === 'X') && 
        (isset($_SESSION['val8']) && $_SESSION['val8'] === 'X')) ||

        ((isset($_SESSION['val3']) && $_SESSION['val3'] === 'X') && 
        (isset($_SESSION['val6']) && $_SESSION['val6'] === 'X') && 
        (isset($_SESSION['val9']) && $_SESSION['val9'] === 'X')) ||

        ((isset($_SESSION['val3']) && $_SESSION['val3'] === 'X') && 
        (isset($_SESSION['val5']) && $_SESSION['val5'] === 'X') && 
        (isset($_SESSION['val7']) && $_SESSION['val7'] === 'X')) ||

        ((isset($_SESSION['val4']) && $_SESSION['val4'] === 'X') && 
        (isset($_SESSION['val5']) && $_SESSION['val5'] === 'X') && 
        (isset($_SESSION['val6']) && $_SESSION['val6'] === 'X')) ||

        ((isset($_SESSION['val7']) && $_SESSION['val7'] === 'X') && 
        (isset($_SESSION['val8']) && $_SESSION['val8'] === 'X') && 
        (isset($_SESSION['val9']) && $_SESSION['val9'] === 'X'))         
        ): ?>
        <div>
            <h2>PLAYER 1 WINS</h2>
            <form action="" method="post">
            <input type="submit" value="Reset" name="reset" class="reset">
        </form>
        </div>

    <?php elseif (
        ((isset($_SESSION['val1']) && $_SESSION['val1'] === 'O') && 
        (isset($_SESSION['val2']) && $_SESSION['val2'] === 'O') && 
        (isset($_SESSION['val3']) && $_SESSION['val3'] === 'O')) ||

        ((isset($_SESSION['val1']) && $_SESSION['val1'] === 'O') && 
        (isset($_SESSION['val4']) && $_SESSION['val4'] === 'O') && 
        (isset($_SESSION['val7']) && $_SESSION['val7'] === 'O')) ||

        ((isset($_SESSION['val1']) && $_SESSION['val1'] === 'O') && 
        (isset($_SESSION['val5']) && $_SESSION['val5'] === 'O') && 
        (isset($_SESSION['val9']) && $_SESSION['val9'] === 'O')) ||

        ((isset($_SESSION['val2']) && $_SESSION['val2'] === 'O') && 
        (isset($_SESSION['val5']) && $_SESSION['val5'] === 'O') && 
        (isset($_SESSION['val8']) && $_SESSION['val8'] === 'O')) ||

        ((isset($_SESSION['val3']) && $_SESSION['val3'] === 'O') && 
        (isset($_SESSION['val6']) && $_SESSION['val6'] === 'O') && 
        (isset($_SESSION['val9']) && $_SESSION['val9'] === 'O')) ||

        ((isset($_SESSION['val3']) && $_SESSION['val3'] === 'O') && 
        (isset($_SESSION['val5']) && $_SESSION['val5'] === 'O') && 
        (isset($_SESSION['val7']) && $_SESSION['val7'] === 'O')) ||

        ((isset($_SESSION['val4']) && $_SESSION['val4'] === 'O') && 
        (isset($_SESSION['val5']) && $_SESSION['val5'] === 'O') && 
        (isset($_SESSION['val6']) && $_SESSION['val6'] === 'O')) ||

        ((isset($_SESSION['val7']) && $_SESSION['val7'] === 'O') && 
        (isset($_SESSION['val8']) && $_SESSION['val8'] === 'O') && 
        (isset($_SESSION['val9']) && $_SESSION['val9'] === 'O'))        
        ): ?>
        <div>
            <h2>PLAYER 2 WINS</h2>
            <form action="" method="post">
            <input type="submit" value="Reset" name="reset" class="reset">
        </form>
        </div>
        <?php elseif (
            (
                isset($_SESSION['val1']) && isset($_SESSION['val2']) && isset($_SESSION['val3']) &&
                isset($_SESSION['val4']) && isset($_SESSION['val5']) && isset($_SESSION['val6']) &&
                isset($_SESSION['val7']) && isset($_SESSION['val8']) && isset($_SESSION['val9'])
                ) && (
                    $_SESSION['val1'] != '-' && $_SESSION['val2'] != '-' && $_SESSION['val3'] != '-' &&
                    $_SESSION['val4'] != '-' && $_SESSION['val5'] != '-' && $_SESSION['val6'] != '-' &&
                    $_SESSION['val7'] != '-' && $_SESSION['val8'] != '-' && $_SESSION['val9'] != '-'
                ) 
        ): ?>
        <div>
            <h2>DRAW</h2>
            <form action="" method="post">
            <input type="submit" value="Reset" name="reset" class="reset">
        </div>
        <?php else: ?>

    <div>
        <h2>Player <?=$_SESSION['player']?> turn</h2>        
        <table>
            <tr>
                <td>
                    <?php if (isset($_SESSION['val1']) && $_SESSION['val1'] == 'X'): ?>
                        <span class="red">X</span>
                    <?php elseif (isset($_SESSION['val1']) && $_SESSION['val1'] == 'O'): ?>
                        <span>O</span>
                    <?php else: ?>
                        <form action="" method="post">
                            <input type="submit" value="-" name="1" class="cell">
                        </form>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if (isset($_SESSION['val2']) && $_SESSION['val2'] == 'X'): ?>
                        <span class="red">X</span>
                    <?php elseif (isset($_SESSION['val2']) && $_SESSION['val2'] == 'O'): ?>
                        <span>O</span>
                    <?php else: ?>
                        <form action="" method="post">
                            <input type="submit" value="-" name="2" class="cell">
                        </form>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if (isset($_SESSION['val3']) && $_SESSION['val3'] == 'X'): ?>
                        <span class="red">X</span>
                    <?php elseif (isset($_SESSION['val3']) && $_SESSION['val3'] == 'O'): ?>
                        <span>O</span>
                    <?php else: ?>
                        <form action="" method="post">
                            <input type="submit" value="-" name="3" class="cell">
                        </form>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php if (isset($_SESSION['val4']) && $_SESSION['val4'] == 'X'): ?>
                        <span class="red">X</span>
                    <?php elseif (isset($_SESSION['val4']) && $_SESSION['val4'] == 'O'): ?>
                        <span>O</span>
                    <?php else: ?>
                        <form action="" method="post">
                            <input type="submit" value="-" name="4" class="cell">
                        </form>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if (isset($_SESSION['val5']) && $_SESSION['val5'] == 'X'): ?>
                        <span class="red">X</span>
                    <?php elseif (isset($_SESSION['val5']) && $_SESSION['val5'] == 'O'): ?>
                        <span>O</span>
                    <?php else: ?>
                        <form action="" method="post">
                            <input type="submit" value="-" name="5" class="cell">
                        </form>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if (isset($_SESSION['val6']) && $_SESSION['val6'] == 'X'): ?>
                        <span class="red">X</span>
                    <?php elseif (isset($_SESSION['val6']) && $_SESSION['val6'] == 'O'): ?>
                        <span>O</span>
                    <?php else: ?>
                        <form action="" method="post">
                            <input type="submit" value="-" name="6" class="cell">
                        </form>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <?php if (isset($_SESSION['val7']) && $_SESSION['val7'] == 'X'): ?>
                        <span class="red">X</span>
                    <?php elseif (isset($_SESSION['val7']) && $_SESSION['val7'] == 'O'): ?>
                        <span>O</span>
                    <?php else: ?>
                        <form action="" method="post">
                            <input type="submit" value="-" name="7" class="cell">
                        </form>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if (isset($_SESSION['val8']) && $_SESSION['val8'] == 'X'): ?>
                        <span class="red">X</span>
                    <?php elseif (isset($_SESSION['val8']) && $_SESSION['val8'] == 'O'): ?>
                        <span>O</span>
                    <?php else: ?>
                        <form action="" method="post">
                            <input type="submit" value="-" name="8" class="cell">
                        </form>
                    <?php endif; ?>
                </td>
                <td>
                    <?php if (isset($_SESSION['val9']) && $_SESSION['val9'] == 'X'): ?>
                        <span class="red">X</span>
                    <?php elseif (isset($_SESSION['val9']) && $_SESSION['val9'] == 'O'): ?>
                        <span>O</span>
                    <?php else: ?>
                        <form action="" method="post">
                            <input type="submit" value="-" name="9" class="cell">
                        </form>
                    <?php endif; ?>
                </td>
            </tr>
        </table>
        <form action="" method="post">
            <input type="submit" value="Reset" name="reset" class="reset">
        </form>
    </div>

   <?php endif;?> 
</body>

</html>
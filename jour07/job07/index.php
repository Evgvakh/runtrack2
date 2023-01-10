<?php 

function gras($str) {
    return '<b>' . $str . '</b>';
}

function cesar($str, $increment) {
    $stringlength = 0;
    $alphaslength = 0;
    $alphas = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    for ($stringlength; isset($str[$stringlength]); $stringlength++);
    for ($alphaslength; isset($alphas[$alphaslength]); $alphaslength++);

    for ($idx = 0; $idx < $stringlength; $idx++) {
        for ($idxA = 0; $idxA < $alphaslength; $idxA++) {
            if ($str[$idx] === $alphas[$idxA]) {
                $str[$idx] = $idxA < $alphaslength - 2 ? $alphas[$idxA + 2] : $alphas[-$idx];
                break;
            }
        }
    }
    return '<u>' . $str . '</u>';
}
function plateforme($str) {
    if ($str[-2] === 'm' && $str[-1] === 'e') {
        $str .= "_";
    }

    return $str;
}

if (isset($_POST['functionType'])) {
    if ($_POST['functionType'] === 'gras') {
        $text = gras($_POST['text']);
    } elseif ($_POST['functionType'] === 'cesar') {
        $text = cesar($_POST['text'], 2);
    } else {
        $text = plateforme($_POST['text']);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="margin: 100px 200px">
        <form action="http://localhost/runtrack2/jour07/job07/" method="post">
            <input type="text" name="text">
            <select name="functionType" id="">
                <option value="gras">Gras</option>
                <option value="cesar">Cesar</option>
                <option value="plateforme">Plateforme</option>
            </select>
            <input type="submit">
        </form>
        <div>
            <p><?=isset($text) ? $text : ''?></p>
        </div>
    </div>
</body>
</html>
<?php

$arr = [];

for ($i = 2; $i <= 1000; $i++ ) {
    array_push($arr, $i);
}

foreach ($arr as $key=>$val) {
    if (($val != 2 && $val != 3 && $val != 5 && $val != 7) && ($val % 2 === 0 || $val % 3 === 0 || $val % 5 === 0 || $val % 7 === 0)) {
        unset($arr[$key]);
    }
}

foreach ($arr as $key=>$val) {
    for ($i = 10; $i <= count($arr) - 1; $i++) {
        if ($val % $i === 0 && $val != $i) {
            unset($arr[$key]);
        }
    }
}

foreach ($arr as $val): ?>
    <?= $val?> <br>
<?php endforeach; 

?>






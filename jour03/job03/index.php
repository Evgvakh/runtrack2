<?php 

$str = "I'm sorry Dave I'm afraid I can't do that";
$str = mb_strtolower($str);
$voyelles = ["a", "i", "e", "u", "o", "y"];

/*
for ($i = 0; $i < strlen($str); $i++) {
    if (in_array($str[$i], $voyelles)): ?>
        <?=$str[$i]?>
    <?php endif;
}
*/

for ($i = 0; isset($str[$i]); $i++) {
    foreach ($voyelles as $value) {
        if ($value == $str[$i]) {
            echo $str[$i];
            break;
        }
    }
}

?>
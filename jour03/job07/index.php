<?php 

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

for ($i = 0; $i < strlen($str) - 1; $i++) {
    // $temp = $str[$i + 1];
    // $str[$i+1] = $str[$i];
    // $str[$i] = $temp;
    list($str[$i], $str[$i+1]) = array($str[$i+1], $str[$i]);
} ?>

<h2><?=$str?></h2>


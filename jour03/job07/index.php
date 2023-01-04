<?php 

$str = "Certaines choses changent, et d'autres ne changeront jamais.";

for  ($i = 0; isset($str[$i]); $i++);

for ($j = 0; $j < $i-1; $j++) {
    // $temp = $str[$i + 1];
    // $str[$i+1] = $str[$i];
    // $str[$i] = $temp;
    list($str[$j], $str[$j+1]) = array($str[$j+1], $str[$j]);
} ?>


<h2><?=$str?></h2>


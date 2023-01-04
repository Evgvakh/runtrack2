<?php 

$str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
$newStr = explode(" ", $str);

foreach ($newStr as $val):
    $toPrint = '';
    for ($i = 0; $i < strlen($val); $i = $i + 2) {
       $toPrint .= $val[$i];        
    } ?>
    <?=$toPrint?>
<?php endforeach;
?>
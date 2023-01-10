<?php

function calcule($num1, $op_str, $num2) {
    if ($op_str === '*') { return $num1 * $num2; }
    elseif ($op_str === '/') { return $num1 / $num2; }
    elseif ($op_str === '/+') { return $num1 + $num2; }
    elseif ($op_str === '-') { return $num1 - $num2; }    
}
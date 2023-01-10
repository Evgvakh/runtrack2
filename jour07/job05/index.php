<?php

function occurrences($str, $char) {
    $strlenth = 0;
    $occurence_nmbr = 0;

    for ($strlenth; isset($str[$strlenth]); $strlenth++);

    for ($i = 0; $i < $strlenth; $i++) {
        if ($char == $str[$i]) {
            $occurence_nmbr++;
        }
    }

    return $occurence_nmbr;
}
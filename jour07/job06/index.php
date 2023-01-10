<?php 

function leetSpeak($str) {
    $i = 0;
    for ($i; isset($str[$i]); $i++);
    
    for ($index = 0; $index < $i; $index++) {
        switch ($str[$index]) {
            case $str[$index] === 'a':
                $str[$index] = '4';
                break;
            case $str[$index] === 'A':
                $str[$index] = '4'; break;

            case $str[$index] === 'b':
                $str[$index] = '8'; break;
            case $str[$index] === 'B':
                $str[$index] = '8'; break;

            case $str[$index] === 'c':
                $str[$index] = '('; break;
            case $str[$index] === 'C':
                $str[$index] = '('; break;            

            case $str[$index] === 'e':
                $str[$index] = '3'; break;
            case $str[$index] === 'E':
                $str[$index] = '3'; break;

            case $str[$index] === 'f':
                $str[$index] = 'ph'; break;
            case $str[$index] === 'F':
                $str[$index] = 'ph'; break;

            case $str[$index] === 'g':
                $str[$index] = '6'; break;
            case $str[$index] === 'G':
                $str[$index] = '6'; break;            
            
            case $str[$index] === 'i':
                $str[$index] = '1'; break;
            case $str[$index] === 'I':
                $str[$index] = '1'; break;

            case $str[$index] === 'k':
                $str[$index] = 'X'; break;
            case $str[$index] === 'K':
                $str[$index] = 'X'; break;
            
            case $str[$index] === 'l':
                $str[$index] = '1'; break;
            case $str[$index] === 'L':
                $str[$index] = '1'; break;
                
            case $str[$index] === 'n':
                $str[$index] = '^'; break;
            case $str[$index] === 'N':
                $str[$index] = '^'; break;
            
            case $str[$index] === 'o':
                $str[$index] = '0'; break;
            case $str[$index] === 'O':
                $str[$index] = '0'; break; 
            
            case $str[$index] === 'r':
                $str[$index] = '2'; break;
            case $str[$index] === 'R':
                $str[$index] = '2'; break; 

            case $str[$index] === 's':
                $str[$index] = '5'; break;
            case $str[$index] === 'S':
                $str[$index] = '5'; break;

        }
    }

    echo $str;
    return $str;
}

leetSpeak('hejllmon arrivaldo');
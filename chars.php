<?php
// Правильное решение
function isValid($s) {
    $stack = [];
    $map = [
        ')' => '(',
        ']' => '[',
        '}' => '{'
    ];
    
    for ($i = 0; $i < strlen($s); $i++) {
        $char = $s[$i];

        if (isset($map[$char])) { 
            if (empty($stack) || array_pop($stack) !== $map[$char]) {
                return false;
            }
        } else { 
            $stack[] = $char;
        }
    }
    
    return empty($stack);
}

// Моё решение - не учитывает правильный порядок закрытия 76-100
$s = "(][)";

function isValid1($s){
    $open = ['(', '[', '{'];
    $close = [')', ']', '}'];
    $arr = str_split($s);
    
    foreach ($arr as $ind => $val){
        if(in_array($val, $open) ){
            // Удаление открывающей
            unset($arr[array_search($val, $arr)]);
            // Удаление закрывающей
            unset($arr[array_search($close[array_search($val, $open)], $arr)]);
        }
    }
    return empty($arr) ? true : false;
}

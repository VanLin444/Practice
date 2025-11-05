<?php
$s= "XCIV";
function romanToInt($s) {
    $roman = [
        "I" => 1,
        "V" => 5,
        "X" => 10,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000,
    ];
    $result = 0;
    $prev = 0;
    for ($i = strlen($s) - 1; $i >=0; $i--){
        $current = $roman[$s[$i]];
        if ($current < $prev){
            $result -= $current;
        } else {
            $result += $current;
        }
        $prev = $current;
    }
    return $result;
}

echo romanToInt($s);
?>
<?php
    // Моё - неплохое
    function isPalindrome($x){
        $x = (string) $x;
        return ($x === strrev($x)) ? true : false;
    }

    $x = -666;
    echo isPalindrome($x);

    // Лучшее
    function isPalindrome2($x) {
        // Отрицательные числа не палиндромы
        if($x < 0) {
            return false;
        }

        $str = strval($x);
        return $str === strrev($str);
    }

?>
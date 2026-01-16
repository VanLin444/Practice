<?php 
function outPut($arr) {
    foreach ($arr as $el) {
        //$array_key = array_key_first($el); // Работает, но постоянно создается перменная
        //echo '<div>' . $el[$array_key] . '</div>' . '<br>'; // Проверить на универсальность
        echo '<div>' . array_values($el)[0] . '</div>' . '<br>';
    }
}
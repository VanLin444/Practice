<?php
    function removeDuplicates(&$nums) {
        $res = array_unique($nums);
        $nums = array_values($res);
        return count($res);
    }

    $nums = [0,0,1,1,1,2,2,3,3,4];
    print_r(removeDuplicates($nums));
    print_r($nums);
?>
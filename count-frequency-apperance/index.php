<?php
function countAppear($arr, $num) {
    $count = 0;
    foreach ($arr as $value) {
        if ($value == $num) {
            $count++;
        }
    }
    return $count;
}

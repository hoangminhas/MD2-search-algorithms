<?php
function findMin($arr) {
    $min = $arr[0];
    foreach ($arr as $value) {
        if ($min > $value) {
            $min = $value;
        }
    }
    return $min;
}

function findMax($arr) {
    $max = $arr[0];
    foreach ($arr as $value) {
        if ($max < $value) {
            $max = $value;
        }
    }
    return $max;
}

$arr1 = range(0, 70, 3);
shuffle($arr1);

echo '<pre>';
print_r($arr1);
echo findMax($arr1) . "<br>";
echo findMin($arr1);
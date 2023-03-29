<?php
// $arr = array(5, 10, 7, 3, 1);
// $min = $arr[0];
// $max = $arr[0];

// for ($i = 1; $i < count($arr); $i++) {
//     if ($arr[$i] < $min) {
//         $min = $arr[$i];
//     }
//     if ($arr[$i] > $max) {
//         $max = $arr[$i];
//     }
// }

// echo "최소값: " . $min . "\n";
// echo "최대값: " . $max . "\n";

$arr = array(5, 10, 7, 3, 1);


function myMin($array)
{
    $minResult = $array[0];
    for ($i=1; $i < count($array); $i++) {
        if ($array[$i] < $minResult) {
            $minResult = $array[$i];
        }
    }
    echo "최소값: " . $minResult . "\n";
}

function myMax($array)
{
    $maxResult = $array[0];
    for ($i=1; $i < count($array); $i++) {
        if ($array[$i] > $maxResult) {
        $maxResult = $array[$i];
        }
    }
    echo "최대값: " . $maxResult . "\n";
}

myMin($arr);
myMax($arr);
?>
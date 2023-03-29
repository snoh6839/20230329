<?php
$arr = array(5, 10, 7, 3, 1);
$min = $arr[0];
$max = $arr[0];

for ($i = 1; $i < count($arr); $i++) {
    if ($arr[$i] < $min) {
        $min = $arr[$i];
    }
    if ($arr[$i] > $max) {
        $max = $arr[$i];
    }
}

echo "최소값: " . $min . "\n";
echo "최대값: " . $max . "\n";

function myMin($array)
{
    for ($i=1; $i < count($array); $i++) {
        $min = $array[0];
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
    }
    echo "최소값: " . $min . "\n";
}

myMin($arr);
?>
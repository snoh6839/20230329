<?php
// $arr = array(5, 10, 7, 3, 1);
// for ($i=0; $i < count($arr) ; $i++) {
//     echo $i.">".$arr[$i]."\n";
// }

//1

$arr = array(5, 10, 7, 3, 1);

for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr) - $i - 1; $j++) {
        if ($arr[$j] > $arr[$j+1]) {
            $temp = $arr[$j];
            $arr[$j] = $arr[$j+1];
            $arr[$j+1] = $temp;
        }
    }
}

for ($i=0; $i < count($arr); $i++) {
    echo $i . " > " . $arr[$i] . "\n";
}
// var_dump($arr);

//2

$arr = array(5, 10, 7, 3, 1);
$cntArr = count($arr);

for ($i = 0; $i < $cntArr; $i++) {
    $minIndex = $i;
    for ($j = $i + 1; $j < $cntArr; $j++) {
        if ($arr[$j] < $arr[$minIndex]) {
            $minIndex = $j;
        }
    }
    if ($minIndex != $i) {
        $temp = $arr[$i];
        $arr[$i] = $arr[$minIndex];
        $arr[$minIndex] = $temp;
    }
}

for ($i = 0; $i < $cntArr; $i++) {
    echo $i . " > " . $arr[$i] . "\n";
}

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



?>

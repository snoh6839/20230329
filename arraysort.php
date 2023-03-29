<?php
// $arr = array(5, 10, 7, 3, 1);
// for ($i=0; $i < count($arr) ; $i++) {
//     echo $i.">".$arr[$i]."\n";
// }

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
    echo $i . ">" . $arr[$i] . "\n";
}
// var_dump($arr);

?>

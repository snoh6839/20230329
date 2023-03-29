<?php
//min, max, floor, round, ceil, rand

// 나누기
function funcDivi($intA, $intB)
{
    $diviNum = $intA / $intB;
    return $diviNum;
}

//소수인지 아닌지
function additionalPrac($a, $b)
{
    if ($a % $b == 0) {
        return "소수가 아닙니다";
    } else {
        $result = funcDivi($a, $b);
        //소수점만 출력
        return $result - floor($result);
    }
};

echo "소수점 아래만 구하기 \n5나누기2 = " . additionalPrac(5, 2) . "\n4나누기2 = " . additionalPrac(4, 2) . "\n";
?>
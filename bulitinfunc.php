<?php
//min, max, floor, round, ceil, rand

// 나누기
function funcDivi($intA, $intB)
{
    $diviNum = $intA / $intB;
    return $diviNum;
}

//소수인지 아닌지
function floorPrac($a, $b)
{
    if ($a % $b == 0) {
        return "소수가 아닙니다";
    } else {
        $result = funcDivi($a, $b);
        //소수점만 출력
        return $result - floor($result);
    }
};

echo "소수점 아래만 구하기 \n5나누기2 = " .floorPrac(5, 2) . "\n4나누기2 = " . floorPrac(4, 2) . "\n";
    
    // 두 날짜 사이의 임의의 날짜를 생성
    function randomDate($start_date, $end_date){
        // 타임 스탬프로 변환
        $min = strtotime($start_date);
        $max = strtotime($end_date);

        // 위에서 얻은 타임 스탬프 값을 사용하여 난수 생성
        $val = rand($min, $max);

        // 원하는 날짜 형식으로 다시 변환
        return date('Y-m-d', $val);
    }

    $start_date = '2023-04-01';
    $end_date = '2023-04-30';

    echo "4월달 초밥 먹는 날: ", randomDate($start_date, $end_date), "\n";

    $recipe = array(
        "계란초밥" => "계란",
        "새우초밥" => "새우",
        "장어초밥" => "장어",
        "유부초밥" => "유부",
        "연어초밥" => "연어",
        "광어초밥" => "광어",
        "참치초밥" => "참치",
        "날치알초밥" => "날치알",
        "문어초밥" => "문어",
        "가리비초밥" => "가리비",
        "북방조개초밥" => "북방조개"
    );

    $randomSushi = array_rand($recipe);
    $ingredient = $recipe[$randomSushi];
    echo "메뉴: ", $randomSushi, ", 주재료: ", $ingredient, "\n";

    $multiDimension = array(
        range(1, 20),
        array("못 먹어", "맘껏 먹어"),
        array(
            array(30, 40, 100)
        )
    );

    $randMulti = $multiDimension[mt_rand(0, count($multiDimension) - 1)];
    $index1 = mt_rand(0, count($multiDimension[0]) - 1);
    $index2 = mt_rand(0, count($multiDimension[1]) - 1);
    $index3 = mt_rand(0, count($multiDimension[2][0]) - 1);

    $randMultiarray = array($multiDimension[0][$index1] , $multiDimension[1][$index2] , $multiDimension[2][0][$index3]);
    $randMulti = array_rand($randMultiarray);
    $randMultiVal = $randMultiarray[$randMulti];
    echo "먹을 갯수: ", $randMultiVal;

    // $intA = 1;
    // $intB = 2;
    // echo $intA. $intB;

?>
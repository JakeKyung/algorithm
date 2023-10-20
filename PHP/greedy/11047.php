<?php
// 거스름돈 - 동전을 적절히 사용해서 그 가치의 합을 K로 만들려고 한다. 이때 필요한 동전 개수의 최솟값을 구하는 프로그램
// $money_list = array(1,5,10,50,100,500,1000,5000,10000,50000);
// $price = 4790; // 12
// $price = 4200; // 6

fscanf(STDIN,"%d %d", $count, $price);
$money_list = array();

for ($i = 0; $i <$count; $i++) {
    fscanf(STDIN,"%d", $money);
    $money_list[] = $money;
}

rsort($money_list);
$min_count = 0;
$current_price = 0;

foreach ($money_list as $money) {
    $rest = $price/$money; // 나눈값
    if ( $rest >= 1 ) {
        $min_count += (int)$rest;
        $price = $price%$money; // 나머지
    }
}
print_r($min_count);


<?php

fscanf(STDIN,"%d", $price);

$counter = 1000;
$money_list = array(1,5,10,50,100,500);
rsort($money_list);
$min_count = 0;

$return_price = $counter - $price;
foreach ($money_list as $money) {
    $rest = $return_price/$money; // 나눈값
    if ( $rest >= 1 ) {
        $min_count += (int)$rest;
        $return_price = $return_price%$money; // 나머지
    }
}
print_r($min_count);
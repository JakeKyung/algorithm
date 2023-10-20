<?php

fscanf(STDIN,"%d %d", $count, $price);
$money_list = array();

for ($i = 0; $i <$count; $i++) {
    fscanf(STDIN,"%d", $money);
    $money_list[] = $money;
}
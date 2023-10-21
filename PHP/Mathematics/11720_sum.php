<?php
fscanf(STDIN,"%d", $a);
fscanf(STDIN,"%{$a}s", $b);

$numbers = str_split($b); // 문자열 분할하여 배열로 전환

$sum = 0;
foreach ($numbers as $number) {
    $sum += (int)$number;
}
print_r($sum);




<?php
/**
 * 숫자와 콤마로만 이루어진 문자열 S가 주어진다. 이때, S에 포함되어있는 정수의 개수
 * 입력 : 10,20,30,40,50
 * 출력 : 5
 */

$text = trim(fgets(STDIN));
$text_array = explode(",", $text);
$count = count($text_array);
echo $count;

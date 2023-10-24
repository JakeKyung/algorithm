<?php
/**
 * 문자열을 입력으로 주면 문자열의 첫 글자와 마지막 글자를 출력
 */

fscanf(STDIN,"%d", $count);
$text_list = array();

for ($i = 0; $i <$count; $i++) {
    fscanf(STDIN,"%s", $text);
    $text_list[] = $text;
}

foreach ($text_list as $value) {
    echo substr($value,0,1).substr($value,-1,1);
    echo PHP_EOL;
}
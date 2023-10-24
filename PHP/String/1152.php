<?php
/**
 * 공백 기준 단어 카운트
 */
$text = fgets(STDIN);

$text_array = explode(" ", trim($text));
$text_count = 0;

if(!empty($text_array[0])){ //  스페이스바 하나로 입력된 경우
    $text_count = count($text_array);
}

echo $text_count;



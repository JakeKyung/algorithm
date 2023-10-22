<?php

fscanf(STDIN, "%s",$text);

// 알파벳 배열 초기화
$alphabet = array_fill_keys(range('a', 'z'), 0);
$text_split = str_split(strtolower($text));

foreach ($text_split as $spelling){
    if (isset($alphabet[$spelling])) {
        $alphabet[$spelling]++;
    }

}
echo implode(" ", $alphabet);

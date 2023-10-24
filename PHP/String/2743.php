<?php
/**
 * 입력받은 문자열의 길이
 */
$text = trim(fgets(STDIN));

$length = strlen($text);

echo $length;
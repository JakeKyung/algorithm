<?php
/**
 * 문자열 10개씩 쪼개기
 */
$text = fgets(STDIN);

$length = strlen($text);
$parts = [];

for ($i = 0; $i < $length; $i += 10) {
    $parts[] = substr($text, $i, 10);
}

foreach ($parts as $part) {
    echo $part;
    echo PHP_EOL;
}

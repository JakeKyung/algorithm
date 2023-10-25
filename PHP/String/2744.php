<?php
/**
 * 대소문자 바꾸기
 */

fscanf(STDIN,"%s", $string);

$result = '';
$string_array = str_split($string);
foreach ($string_array as $key => $val) {
    if(ctype_upper($val)) {
        $result .= strtolower($val);
    }
    if(ctype_lower($val)) {
        $result .= strtoupper($val);
    }
}

echo $result;
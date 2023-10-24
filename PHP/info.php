<?php


echo PHP_INT_MIN . PHP_EOL;  // 최소 정수값 출력 : -9223372036854775808
echo PHP_INT_MAX . PHP_EOL;  // 최대 정수값 출력 : 9223372036854775807



$text = fgets(STDIN); // fgets() 함수는 입력의 끝에 개행 문자('\n')을 포함한다.
$text = trim(fgets(STDIN)); // 개행 문자 제거시 trim() 사용 권장
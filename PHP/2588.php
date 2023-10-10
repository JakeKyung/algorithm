<?php
    $a = intval(fgets(STDIN));
    $b = intval(fgets(STDIN));

    $num_one = $b%10;
    $num_ten = ($b%100 - $b%10) / 10;
    $num_hund = (int)($b/100);

    fprintf(STDOUT, "%d\n", $a*$num_one);
    fprintf(STDOUT, "%d\n", $a*$num_ten);
    fprintf(STDOUT, "%d\n", $a*$num_hund);
    fprintf(STDOUT, "%d\n", $a*$b);



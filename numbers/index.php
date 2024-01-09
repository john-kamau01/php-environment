<?php

    // PHP Numbers

    /* 
    Integer, Float, Number Strings, Infinity, NaN
    */
    $x = 9000;
    var_dump(is_int($x));

    echo "<br />";

    $y = 50.55;
    var_dump(is_int($y));

    echo "<br />";
    // echo PHP_FLOAT_MAX;
    var_dump(is_float($x));

    echo "<br />";
    var_dump(is_double($y));

    echo "<br />";
    var_dump(is_numeric(("456" . "hello")));

    // CASTING
    echo "<br />";
    $original_num = 123.456;
    $int_cast = (int) $original_num;
    echo $int_cast;
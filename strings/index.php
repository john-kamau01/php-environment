<?php
    
    $x = "Hello Kenya!";

    echo strlen($x);
    
    echo "<br />";
    echo str_word_count($x);
    
    echo "<br />";
    echo strpos($x, "Kenya");

    echo "<br />";
    echo strtoupper($x);

    echo "<br />";
    echo str_replace("Kenya", "Nairobi", $x);

    echo "<br />";
    echo strrev($x);

    echo "<br />";
    echo trim(" Hello Kenya!    ");

    echo "<br />";
    $y = explode(" ", $x);
    print_r($y);

    echo "<br />";
    echo substr($x, 6, -3);
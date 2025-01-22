<?php

$numbers = [12,90,23,212,100,150,3];

$factors = [2,3,5];

foreach($factors as $factor){
    $multiples = array_filter($numbers, fn($n) => $n % $factor == 0);
    echo "Multiples of: $factor";
    echo "<pre>";
    print_r($multiples);
}

?>
<?php

$sum = function($a, $b){
    return $a + $b;
};

echo $sum(10,11);
echo "<br>";

$var = function($x){
    return pow($x, exponent:2);
};
echo 'Elevado al cuadrado = '.$var(4);
echo "<br>";

$numbers = [12,4,25,55,15,90,89];
$multFive = array_filter($numbers, function($n){
    return $n % 5 == 0;

});
echo "<pre>";
print_r($multFive);

echo "<br>";

$number = [10,9,8,7,6,5,4,3,2,1,0];
$incrementNumber = array_map(function($N){
    return $N + 1;
},$number);
echo "<pre>";
var_dump($incrementNumber);



?>


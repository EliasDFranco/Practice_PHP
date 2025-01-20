<?php

function greeting($name){
echo "Hello my friend!! $name";
}
greeting("Elias"."<br>");
greeting("Marcos"."<br>");
greeting("Victor"."<br>");

echo "<br>";

function fullName($name, $lastName){
    echo "Your name is $name "."and your last name is $lastName"; 
}
fullName("Anthony","Soprano"."<br>");
fullName("Walter","White"."<br>");
fullName("Rick","Grimes"."<br>");

function meterstoKilometers($meters = 0){
$km = 0.001;
return $meters * $km;
}

echo meterstoKilometers(1000);
echo "<br>";
echo meterstoKilometers(1000000000);
echo "<br>";
echo meterstoKilometers(1000000000000000000);

echo "<br>"; 

function sum($num1, $num2, $num3){
$s = $num1 + $num2 + $num3;
echo $s;
return;
}
sum(10,10,10);

?>
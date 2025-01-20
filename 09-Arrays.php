<?php
// Array | Arreglos | Vectores 
$daysWeek = array('Sunday <br>','Monday <br>','Tuesday <br>','Wednesday <br>','Thursday <br>','Friday<br>','Saturday <br>');
print_r($daysWeek);

//Arrays asociativos | Associative array

$students= array('name' => 'Elias', 'last_name' => 'Franco', 'age' => 20 );
print_r($students);
echo "My name is: ".$students['name'];
echo "<br> My last name: ".$students["last_name"];
echo "And my age: ".$students["age"];

?>

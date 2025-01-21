<?php
// Parameters of the function in PHP!!!

function proof($variable1, $variable2) {
    return $variable1.$variable2;
}

$show = proof(variable1:"Directed by ", variable2:"Elias D. Franco");

echo $show;
echo "<br>";

function nameDirectors($name1, $name2, $name3){
    return $name1.$name2.$name3;
}
$listNames = nameDirectors(
    name1: "Quentin Tarantino <br> ",
    name2: "Paul Thomas Anderson <br> ",
    name3: "Stanley Kubrick  <br> "
);

echo "Directors of the Year: ". "<br>" . $listNames ;
echo "<br>";

$cont = 6;
function increment($value) {
    $value += 1;
    echo $value."<br>";
}

increment($cont);
echo $cont;
echo "<br>";

$cont2 = 10;
function increment2(&$value2) {  // The & is used to pass a variable by reference to a function. 
                                 //  This means that any changes made to that variable inside the function will 
                                 // also affect the value of the variable outside the function.
    $value2 += 1;
    echo $value2."<br>";
}

increment2($cont2);
echo $cont2;

echo "<br>";

function cars($car1, $car2, $default= " ") {
    return $car1.$default.$car2;
}

$message = cars(car1:"Mercedes-Benz", car2:"Toyota Hilux", default: " and ");
echo $message;

?>

<!DOCTYPE html>
<html>
    <body>
        <?php
// The var_dump() function returns the data type and the value:
$city = "San Lorenzo";
var_dump($city);
$money = 5.99;
var_dump($money);

//An integer data type is a non-decimal number between -2,147,483,648 and 2,147,483,647.
$numberOne = 1;
echo $numberOne . "<br>"; 

//A float (floating point number) is a number with a decimal point or a number in exponential form.
$numberTwo = 10.99; 
echo $numberTwo . "<br>"; 

//A Boolean represents two possible states: TRUE or FALSE.
$x = true;
var_dump($x);

//An array stores multiple values in one single variable.
$cars = array("Mercedes-Benz","BMW","Toyota");
var_dump($cars);

        ?>
    </body>
</html>
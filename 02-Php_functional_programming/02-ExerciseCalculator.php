<?php 
$value1 = 20;
$value2 = 10;

function sum($valueOne, $valueTwo) {
    $result = $valueOne + $valueTwo; 
    return $result;
}
echo "<br>";
function rest($valueOne, $valueTwo) {
    $result = $valueOne - $valueTwo; 
    return $result;
}
echo "<br>";
function multiplication($valueOne, $valueTwo) {
    $result = $valueOne * $valueTwo; 
    return $result;
}
echo "<br>";
function division($valueOne, $valueTwo) {
    $result = $valueOne / $valueTwo; 
    return $result;
}

$operation = 'sum';

switch ($operation) {
    case 'sum':
        $result = sum($value1,$value2);
        break;

    case 'rest':
        $result = rest($value1,$value2);
        break;

    case 'multiplication':
        $result = multiplication($value1,$value2);
        break;

    case 'division':
        $result = division($value1,$value2);
        break;

}

echo "Calculator with functions<br>";
echo "Type of operation: $operation<br>";
echo "The result is: $result";

?>
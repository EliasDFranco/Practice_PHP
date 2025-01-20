<?php
$course = "Spanish I";
switch ($course) {
    case 'Programming Fundamentals I':
        echo "Monday";
        break;
    
    case 'Spanish I':
        echo "Friday";
        break;

    case 'Python Languaje':
        echo 'Thursday';
        break;
    
    default:
        echo "That course does not exist";
        break;
}    
?>
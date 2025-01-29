<?php
//The function date() function formats a timestamp to a more readable date and time.
echo "Today is " . date("Y/m/d" . "<br>");
echo  "<br>";
echo "Today is " . date("Y-m-d" . "<br>");
echo  "<br>";
echo "Today is " . date("Y.m.d" . "<br>");
echo  "<br>";

// PHP Tip - Automatic Copyright Year
// Use the date() function to automatically update the copyright year on your website:
echo "&copy; " . date("Y");

?>
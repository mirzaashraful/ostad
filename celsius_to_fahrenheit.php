<?php
/*
Write a PHP script to convert a temperature of 32 degrees 
Celsius to Fahrenheit. 
 Store just the temperature value in a variable, no need to store the unit(Celsius). 
Print the result using the printf function to show up to 2 decimal points.
*/

/*Fahrenheit to Celsius Conversion
$fahrenheit = (celsius * 9)/5 + 32
Multiply 32 by 9/5: 32 × (9/5) ​= 57.6.
(32X9)/5 + 32 = 57.6
Add 32 to this result: 57.6 + 32 = 89.6.
*/

// Celsius to Fahrenheit Conversion
//$celsius = (fahrenheit -32) *5 / 9

$celsius = 32;
// Inline Calculation
$fahrenheit = ($celsius *9) / 5 + 32;
 
echo "{$celsius}°C = {$fahrenheit}°F is";


?>
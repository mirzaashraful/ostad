<?php
// Input the three numbers 
// and store it in variable 
$num1 = 4; 
$num2 = 5; 
$num3 = 6; 
      
      if ($num1 > $num2 && $num1 > $num3) { 
    echo "The largest number is: $num1\n"; 
} elseif ($num2 > $num1 && $num2 > $num3) { 
    echo "The largest number is: $num2\n"; 
} else { 
    echo "The largest number is: $num3\n"; 
} 

?>
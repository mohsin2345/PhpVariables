<?php
$a = 5;          // Integer
$b = 5.34;      // Float
$c = "25";      // String

// Convert to numbers
$intA = (int)$a;          // Cast to integer
$floatB = (float)$b;     // Cast to float
$intC = (int)$c;         // Cast to integer from string
$floatC = (float)$c;     // Cast to float from string

echo "Integer A: $intA<br>";         // Outputs: 5
echo "Float B: $floatB<br>";         // Outputs: 5.34
echo "Integer C from string: $intC<br>"; // Outputs: 25
echo "Float C from string: $floatC<br>";  // Outputs: 25.0
?>

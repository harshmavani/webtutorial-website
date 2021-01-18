<?php
echo intval(2) . "<br>";       // Outputs: 2
echo intval(2.75) . "<br>";    // Outputs: 2
echo intval('34') . "<br>";    // Outputs: 34
echo intval('+34') . "<br>";   // Outputs: 34
echo intval('-34') . "<br>";   // Outputs: -34
echo intval(034) . "<br>";     // Outputs: 28
echo intval('034') . "<br>";   // Outputs: 34
echo intval(1e10) . "<br>";    // Outputs: 10000000000
echo intval('1e10') . "<br>";  // Outputs: 1 (return 100000 in PHP 7.1+)
echo intval(0xff) . "<br>";    // Outputs: 255
echo intval('0xff') . "<br>";  // Outputs: 0
?>
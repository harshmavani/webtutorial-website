<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Convert a Number from One Base to Another</title>
</head>
<body>

<?php
// Convert decimal to binary
echo base_convert('12', 10, 2) . "<br>";  // 0utputs: 1100
// Convert binary to decimal
echo base_convert('1100', 2, 10) . "<br>";  // 0utputs: 12
 
// Convert decimal to hexadecimal
echo base_convert('10889592', 10, 16) . "<br>";  // 0utputs: a62978
// Convert hexadecimal to decimal
echo base_convert('a62978', 16, 10) . "<br>";  // 0utputs: 10889592
 
// Convert decimal to octal
echo base_convert('82', 10, 8) . "<br>";  // 0utputs: 122
// Convert octal to decimal
echo base_convert('122', 8, 10) . "<br>";  // 0utputs: 82
 
// Convert hexadecimal to octal
echo base_convert('c2c6a8', 16, 8) . "<br>";  // 0utputs: 60543250
// Convert octal to hexadecimal
echo base_convert('60543250', 8, 16) . "<br>";  // 0utputs: c2c6a8
 
// Convert octal to binary
echo base_convert('42', 8, 2) . "<br>";  // 0utputs: 100010
// Convert binary to octal
echo base_convert('100010', 2, 8) . "<br>";  // 0utputs: 42
 
// Convert hexadecimal to binary
echo base_convert('abc', 16, 2) . "<br>";  // 0utputs: 101010111100
// Convert binary to hexadecimal
echo base_convert('101010111100', 2, 16);  // 0utputs: abc
?>

</body>
</html>    
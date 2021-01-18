<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Convert a Decimal Number to Octal and Vice Versa</title>
</head>
<body>

<?php
// Convert decimal to octal 
echo decoct(12) . "<br>";   // 0utputs: 14
echo decoct(256) . "<br>";  // 0utputs: 400
echo decoct(77) . "<br>";   // 0utputs: 115
 
// Convert octal to decimal
echo octdec('14') . "<br>";   // 0utputs: 12
echo octdec('400') . "<br>";  // 0utputs: 256
echo octdec('115') . "<br>";  // 0utputs: 77
?>

</body>
</html>
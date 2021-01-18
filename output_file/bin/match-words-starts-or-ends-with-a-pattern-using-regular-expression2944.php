<!DOCTYPE html>
<html lang="en">
<head>
    <title>Match Words Starts or Ends with a Pattern Using RegExp in PHP</title>
</head>
<body>

<?php
$pattern = '/\bcar\w*/';
$replacement = '<b>$0</b>';
$text = 'Words begining with car: cart, carrot, cartoon. Words ending with car: scar, oscar, supercar.';
echo preg_replace($pattern, $replacement, $text);
?>

</body>
</html>
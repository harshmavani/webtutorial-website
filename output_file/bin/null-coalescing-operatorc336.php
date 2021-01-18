<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Null Coalescing Operator</title>
</head>
<body>

<?php
$name = $_GET['name'] ?? 'anonymous';
echo $name;
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Including File Only Once in PHP</title>
</head>
<body>

<?php
// Including file
require_once "my_functions.php";
// Calling the function
multiplySelf(2); // Output: 4
echo "<br>";
 
// Including file once again
require_once "my_functions.php";
// Calling the function
multiplySelf(5); // Output: 25
?>

</body>
</html>
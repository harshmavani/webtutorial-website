<!DOCTYPE html>
<html lang="en">
<head>
    <title>Validate an Integer in PHP</title>
</head>
<body>

<?php
// Sample integer value
$int = 20;
 
// Validate sample integer value
if(filter_var($int, FILTER_VALIDATE_INT)){
    echo "The <b>$int</b> is a valid integer";
} else {
    echo "The <b>$int</b> is not a valid integer";
}
?> 

</body>
</html>    
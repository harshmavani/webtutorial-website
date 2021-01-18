<!DOCTYPE html>
<html lang="en">
<head>
    <title>Match Strings Beginning with Specific Characters Using RegExp in PHP</title>
</head>
<body>

<?php
$pattern = "/^J/";
$names = array("Jhon Carter", "Clark Kent", "John Rambo");
$matches = preg_grep($pattern, $names);
 
// Loop through matches array and display matched names
foreach($matches as $match){
    echo $match . "<br>";
}
?>

</body>
</html>
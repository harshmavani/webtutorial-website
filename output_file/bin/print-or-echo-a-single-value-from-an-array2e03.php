<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Accessing a Value from PHP Array</title>
</head>
<body>

<?php
// Indexed array
$sports = array("Baseball", "Cricket", "Football", "Shooting");
 
// Associative array
$cities = array("France"=>"Paris", "India"=>"Mumbai", "UK"=>"London", "USA"=>"New York");
 
// Multidimensional array
$superheroes = array(
    array(
        "name" => "Peter Parker",
        "character" => "Spider-Man",
    ),
    array(
        "name" => "Tony Stark",
        "character" => "Iron-Man",
    ),
    array(
        "name" => "Clark Kent",
        "character" => "Super-Man",
    )
);
 
echo $sports[0]; // Outputs: Baseball
echo "<br>";
echo $sports[1]; // Outputs: Cricket
echo "<br>";
echo $cities["France"]; // Outputs: Paris
echo "<br>";
echo $cities["USA"]; // Outputs: New York
echo "<br>";
echo $superheroes[0]["name"]; // Outputs: Peter Parker
echo "<br>";
echo $superheroes[1]["character"]; // Outputs: Iron-Man
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Example of foreach Loop over PHP Associative Array</title>
</head>
<body>

<?php
$cities = array("France"=>"Paris", "India"=>"Mumbai", "UK"=>"London", "USA"=>"New York");
 
// Loop through cities array
foreach($cities as $key => $value){
    echo $key . " : " . $value . "<br>";
}
?>

</body>
</html>
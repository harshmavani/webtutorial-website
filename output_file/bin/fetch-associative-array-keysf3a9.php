<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Example of Fetching PHP Associative Array Keys</title>
</head>
<body>

<?php
$cities = array("France"=>"Paris", "India"=>"Mumbai", "UK"=>"London", "USA"=>"New York");
 
// Get keys from cities array
print_r(array_keys($cities));
?>

</body>
</html>
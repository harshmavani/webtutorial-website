<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get All File Contents as an Array in PHP</title>
</head>
<body>

<?php
$file = "data.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Reading the entire file into an array
    $arr = file($file) or die("ERROR: Cannot open the file.");
    foreach($arr as $line){
        echo $line;
    }
} else{
    echo "ERROR: File does not exist.";
}
?>

</body>
</html>
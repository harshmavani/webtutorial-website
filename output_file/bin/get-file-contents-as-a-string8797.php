<!DOCTYPE html>
<html lang="en">
<head>
    <title>Get All File Contents as a String in PHP</title>
</head>
<body>

<?php
$file = "data.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Reading the entire file into a string
    $content = file_get_contents($file) or die("ERROR: Cannot open the file.");
        
    // Display the file content 
    echo $content;
} else{
    echo "ERROR: File does not exist.";
}
?>

</body>
</html>
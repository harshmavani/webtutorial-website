<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reading All Contents without Opening the File in PHP</title>
</head>
<body>

<?php
$file = "data.txt";
 
// Check the existence of file
if(file_exists($file)){
    // Reads and outputs the entire file
    readfile($file) or die("ERROR: Cannot open the file.");
} else{
    echo "ERROR: File does not exist.";
}
?>

</body>
</html>
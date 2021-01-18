<!DOCTYPE html>
<html lang="en">
<head>
    <title>Match a Pattern against a String Using RegExp in PHP</title>
</head>
<body>

<?php
$pattern = "/ca[kf]e/";
$text = "He was eating cake in the cafe.";
if(preg_match($pattern, $text)){
    echo "Match found!";
} else{
    echo "Match not found.";
}
?>

</body>
</html>
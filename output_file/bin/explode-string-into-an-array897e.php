<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Exploding String into an Array in PHP</title>
</head>
<body>

<?php
$my_str = 'The quick brown fox jumps over the lazy dog.';
print_r(explode(" ", $my_str));
echo "<br>";
print_r(explode(" ", $my_str, 4));
?>

</body>
</html>
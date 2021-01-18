<!DOCTYPE html>
<html lang="en">
<head>
    <title>Example of Retrieving the Current Page URL in PHP</title>
</head>
<body>

<?php
$url = $_SERVER['REQUEST_URI'];
echo $url;
echo "<hr>";

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo $url;
echo '<hr>';

$query = $_SERVER['QUERY_STRING'];
echo $query;
?>

</body>
</html>
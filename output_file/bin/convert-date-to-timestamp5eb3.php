<?php
$date1 = "2019-05-16";
$timestamp1 = strtotime($date1);
echo $timestamp1; // Outputs: 1557964800
echo "<br>";
 
$date2 = "16-05-2019";
$timestamp2 = strtotime($date2);
echo $timestamp2; // Outputs: 1557964800
echo "<br>";
 
$date3 = "16 May 2019";
$timestamp3 = strtotime($date3);
echo $timestamp3; // Outputs: 1557964800
?>
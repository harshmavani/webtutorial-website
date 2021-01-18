<?php
$original_date = "2019-03-31";
 
// Creating timestamp from given date
$timestamp = strtotime($original_date);
 
// Creating new date format from that timestamp
$new_date = date("d-m-Y", $timestamp);
echo $new_date; // Outputs: 31-03-2019
?>
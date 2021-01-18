<?php
$str = "This is a simple \npiece\tof text.";
$new_str = preg_replace("/\s+/", "", $str);
echo $new_str; // Outputs: Thisisasimplepieceoftext.
?>
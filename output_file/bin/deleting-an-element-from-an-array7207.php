<?php
$arr1 = array("a" => "Apple", "b" => "Ball", "c" => "Cat");
unset($arr1["b"]); 
print_r($arr1);
echo "<hr>";
 
$arr2 = array(1, 2, 3);
unset($arr2[1]);
print_r($arr2);
?>
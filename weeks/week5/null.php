<?php
echo '<h2>First Example of "a", ergo, it is FALSE, NOT NULL</h2>';
$a = 0;
echo "a is " . is_null($a) . "<br>";
// 0 is assigned to a

echo '<h2>Second Example of "b", echoing "1" -- what does that mean? 1 equals TRUE</h2>';
$b = null;
echo "b is " . is_null($b) . "<br>";
// null is assigned to b;  1 = true 

echo '<h2>Third Example of "c", ergo, c IS NOT NULL</h2>';
$c = "null";
echo "c is " . is_null($c) . "<br>";
// "null" is assigned to c; it's not null

echo '<h2>Fourth Example of "d", ergo, "d" is NULL!</h2>';
$d = NULL;
echo "d is " . is_null($d) . "<br>";
// NULL is assigned to d 
?>
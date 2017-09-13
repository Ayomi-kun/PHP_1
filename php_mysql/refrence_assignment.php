<?php
//we want to crossrefrence two variables so they both point to the same value
$a = 1;
$b = 20;
$a =& $b;

echo "a: is $a <br /> b: is $b";
//this will assign them both to the last assigned value for any of the operators
echo "<hr />";

$c = 5;
$d =& $c;
$d = 100;
echo "c: is $c <br /> d: is $d";

//to break the link
unset($d);
//this assigns d an empty value
?>
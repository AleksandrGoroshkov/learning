<?php
$a = (2 == "2");    // true (значения равны)
$b = (5 === "5");   // false (значения представляют разные типы)
var_dump("a = $a b = $b");
echo "<br>";
 $a = 4 <=> 4;
 $b = 6 <=> 5;
 $c = 7 <=> 9;
 var_dump("a = $a b = $b c = $c");
 echo "<br>";
$a = (true && false);   // false
// аналогично
$a = (true and false);  // false

$b = (true || false); // true
// аналогично следующей операции
$b = (true or false); // true

$c = !true;           // false
echo "<br>";
$a = (true xor true);   //  false
$b = (false xor true);  //  true
$c = (false xor false); //  false
echo "<br>";
$a = 12;
$a -=5;
echo $a;
echo "<br>";
$b = 27;
$b /= 9;
var_dump("b = $b");
echo "<br>";
$a = 18;
$a .=7;
echo $a;
echo "<br>";
$b = 14;
$b .= 88;
echo $b;

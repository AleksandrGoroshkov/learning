<?php
$a = 5;
if ($a == 7) echo "вариант1";
    elseif ($a == 8) echo "вариант2";
    elseif ($a == 5) echo "вариант3";
    elseif ($a == 3) echo "вариант4";
echo "<br>";

$b = 13;
switch ($b) {
    case 1: echo "вариант1"; break;
    case 14: echo "вариант2"; break;
    case 13: echo "вариант3"; break;
    case 43: echo "вариант4"; break;
}
echo "<br>";

$c = 16;
switch ($c) {
    case 2: echo "Variant 1"; break;
    case 5: echo "variant 2"; break;
    case 15: echo "variant 3"; break;
    default: echo "Zna4enie ne naideno"; break;
}
echo "<br>";

$d = 21;
switch ($d):
    case 3: echo "variant 1"; break;
    case 21:echo "Nawol"; break;
endswitch;
echo "<br>";

echo "Match<br>";
$e = 33;
switch ($e) {
    case 4: $deistvie = "variant 1"; break;
    case 22: $deistvie = "variant 2"; break;
    default: $deistvie = "variant 3"; break;
}
 echo $deistvie;
echo "<br>";

$f = 7;
$liza = match($f) {
3=> "variant 1",
7=> "variant 2",
default => "variant 3",
};
echo $liza;
echo "<br>";

echo "Разница между switch и Match<br>";

switch(2.0) {
    case "2.0": $result = "stroka"; break;
    case 2.0: $result = "4islo"; break;
}
echo $result;
echo "<br>";

match (2.0) {
    "2.0"  => $result = "stroka",
    2.0 => $result = "4islo"
};
Echo $result;
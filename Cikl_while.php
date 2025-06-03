<?php
$con = 1;
while ($con < 10) {
    echo $con * $con . "</br>";
    $con +=2;
}
echo "<br>";

$counter = 0;
while (++$counter < 10)
    echo $counter * $counter . "<br />";
echo "<br>";

$counter = 1;
while($counter<10):
    echo $counter * $counter . "<br />";
    $counter +=2;
endwhile;

<?php
for ($i = 1; $i < 10; $i +=2) {
    if ($i == 5)
    {
    continue;
    }
    echo "квадрат числа $i = " . $i * $i . "<br>";
}


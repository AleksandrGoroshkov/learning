<?php
for ($i=1; $i < 10; $i +=3) {
    echo "Куб числа $i равен " . $i * $i ;
}
echo "<br>";
echo "Определение переменной вне цикла<br>";
$i = 0;
for (; $i < 10; $i +=2) {
    echo $i;
}
echo "<br>";
for ($i = 1, $o = 2; $i + $o <20; $i +=2, $o +=2) {
    echo "$i + $o = " . $i + $o . "<br>";
}
//альтернативыный синтаксис 123
for ($i = 1; $i < 5; $i++):
    echo "Квадрат числа $i = " . $i * $i . "</br>";
endfor;
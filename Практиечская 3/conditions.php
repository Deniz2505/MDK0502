<h1>Практическая 3</h1>

<h2>Задача 1</h2>

<?php

$a = 2;

$b = 45;

echo "Переменная a = " . $a . "<br>";

echo "Переменная b = " . $b . "<br>";

if ($a < $b) {

    echo $a + $b; 

} else {

    echo $a * $b; 

}


?>





<h2>Задача 2</h2>

<?php

$angle1 = 50;

$angle2 = 10;

echo "Первый угол = " . $angle1 . "<br>";

echo "Второй угол = " . $angle2 . "<br>";

if (($angle1 + $angle2) < 180 && $angle1 > 0 && $angle2 > 0) {

echo "Треугольнки существует.";

$angle3 = 180 - $angle1- $angle2;

if ($angle1 == 90 &&  $angle2 == 90  && $angle3 == 90) {

echo "Он прямоугольный.";

} else {

echo "Он не прямоугольный.";

}
} else {

echo "Такой треугольник не существует.";

}

?>




<h2>Задача 3</h2>
<?php
$age = 2;
$ageGroup = '';

echo "Возраст кота = " . $age . "<br>";

if ($age <= 1) {

$ageGroup = 'Котята';

} elseif ($age <= 3) {

$ageGroup = 'Молодые коты';

} elseif ($age <= 7) {

$ageGroup = 'Коты средних лет';

} else {

$ageGroup = 'Почтенные коты';

}

echo "Возрастная группа: " . $ageGroup;


?>



<h2>Задача 4</h2>

<?php

$a = 2;

$b = 1;

$c = 5;


if (($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a)) {

echo "Треугольник со сторонами $a, $b, $c существует.";

} else {

echo "Треугольник не существует.";

} 

?>


<h2>Задача 5</h2>

<?php

$n = 2026; 


echo "Проверяемый год N = " . $n . "<br>";

if ($n % 100 == 0) {

$isLeap = ($n % 400 ==0);

} else {

$isLeap = ($n % 4 ==0);

}
if ($isLeap) {

echo "Результат: Год " . $n . " - високосный.";

} else 

echo "Результат: Год " . $n . " - не високосный.";



?>




<h2>Задача 7</h2>
<?php

$A = 5; $B = 9; 


$x = 3; $y = 5; $z = 7; 


echo "Отверстие: A = $A, B = $B<br>";


echo "Кирпич: x = $x, y = $y, z = $z<br>";


$brick = [$x, $y, $z];

sort($brick); 


$hole = [$A, $B];


sort($hole); 


if ($brick[0] < $hole[0] && $brick[1] < $hole[1]) {

echo "Результат: Кирпич пройдёт через отверстие.";

} else {

echo "Результат: Кирпич не пройдёт через отверстие.";

}

?>


<h2>Задача 8</h2>
<?php

$dayNumber = 250; 

echo "Номер дня в году: " . $dayNumber . "<br>";


if ($dayNumber < 1 || $dayNumber > 365) {

echo "Результат: Некорректный номер дня (должен быть от 1 до 365).";

} else {


$daysInMonth = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

$monthNames = ['января', 'февраля', 'марта', 'апреля', 'мая', 'июня',

'июля', 'августа', 'сентября', 'октября', 'ноября', 'декабря'];

$day = $dayNumber;

$monthIndex = 0;

while ($day > $daysInMonth[$monthIndex]) {

$day -= $daysInMonth[$monthIndex];

$monthIndex++;

}
echo "Результат: это " . $day . " " . $monthNames[$monthIndex] . ".";

}

?>




<h2>Задача 9</h2>

<?php


$number = 42;

echo "Проверяемое число = " . $number . "<br>";

if ($number % 4 == 0 && $number % 6 == 0) {

echo "Результат: Число $number делится и на 4, и на 6.";

} elseif ($number % 4 == 0) {
    
echo "Результат: Число $number делится только на 4.";

} elseif ($number % 6 == 0) {

echo "Результат: Число $number делится только на 6.";

} else {

echo "Результат: Число $number не делится ни на 4, ни на 6.";


}

?>




<h2>Задача 10</h2>
<?php

$px = 1;

$py = 2;

$r = 3;

echo "Точка: ($px, $py), радиус r = $r<br>";


if (($px * $px + $py * $py) <= ($r * $r)) {

echo "Результат: Точка лежит внутри круга (или на границе).";

} else {

echo "Результат: Точка лежит вне круга.";

}

?>






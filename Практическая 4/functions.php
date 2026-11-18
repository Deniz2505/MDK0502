


<h2> Задание 1 Вычисления длины окружности</h2>

<?php

function circleLength ($r)
{
    return 2 * pi() * $r;
}
$radius = 5;

echo 'Исходные данные радиуса = ' . $radius;

echo '<p> Длина окружности - ' . circleLength (5) . '</p>';

?>



<h2> Задание 2. Площадь треугольника</h2>

<?php

$a = 5;
$b = 6;
$c = 7;

function area ($a, $b, $c)
{
    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a)
    {
        return 0;
    }

    $p = ($a + $b + $c) / 2;

    return sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
}

echo '<p> Исходные данные: a = ' . $a . ', b = ' . $b . ', c = ' . $c . '</p>';
echo '<p> Результат: ' . area ($a, $b, $c) . '</p>';

?>

<h2> Задание 3. Наибольший делитель числа</h2>

<?php


$number = 12;

function divisor ($number)
{
    for ($i = $number - 1; $i >= 1; $i--)
    {
        if ($number % $i == 0)
        {
            return $i;
        }
    }
}

echo '<p> Исходные данные: number = ' . $number . '</p>';
echo '<p> Результат: ' . divisor ($number) . '</p>';

?>

<h2> Задание 4. Все делители числа</h2>

<?php


$number = 12;

function divisors ($number)
{
    $result = [];

    for ($i = 1; $i <= $number; $i++)
    {
        if ($number % $i == 0)
        {
            $result[] = $i;
        }
    }

    return $result;
}

echo '<p> Исходные данные: number = ' . $number . '</p>';

$numbers = divisors ($number);

echo '<p> Результат: </p>';

foreach ($numbers as $number)
{
    echo $number . ' ';
}

?>

<h2> Задание 5. Сумма квадратов</h2>

<?php


$numbers = [2, 3, 4];

function sum ($numbers)
{
    $result = 0;

    foreach ($numbers as $number)
    {
        $result = $result + $number * $number;
    }

    return $result;
}

echo '<p> Исходные данные: numbers = [2, 3, 4]</p>';
echo '<p> Результат: ' . sum ($numbers) . '</p>';

?>

<h2> Задание 6. Преобразование массива в строку</h2>

<?php

// Исходные данные
$words = ['Привет', 'Пока', 'PHP', [1, 2, 3], 'HTML'];

function convert ($array)
{
    $result = '';

    foreach ($array as $item)
    {
        if (is_array($item))
        {
            $result = $result . 'array ';
        }
        else
        {
            $result = $result . $item . ' ';
        }
    }

    return $result;
}

echo '<p> Исходные данные: words = [Привет, Пока, PHP, array, HTML]</p>';
echo '<p> Результат: ' . convert ($words) . '</p>';

?>

<h2> Задание 7. Длина строк</h2>

<?php

// Исходные данные
$text1 = 'Привет';
$text2 = 'Пока';
$text3 = 'PHP';

function length (...$strings)
{
    $result = 0;

    foreach ($strings as $string)
    {
        $result = $result + strlen($string);
    }

    return $result;
}

echo '<p> Исходные данные: text1 = Привет, text2 = Пока, text3 = PHP</p>';
echo '<p> Результат: ' . length ($text1, $text2, $text3) . '</p>';

?>

<h2> Задание 8. Рекурсия</h2>

<?php

// Исходные данные
$words = ['Привет', 'PHP', ['HTML', 'CSS'], 'Пока'];

function recursive ($array)
{
    $result = '';

    foreach ($array as $item)
    {
        if (is_array($item))
        {
            $result = $result . recursive ($item);
        }
        else
        {
            $result = $result . $item . ' ';
        }
    }

    return $result;
}

echo '<p> Исходные данные: words = [Привет, PHP, [HTML, CSS], Пока]</p>';
echo '<p> Результат: ' . recursive ($words) . '</p>';

?>
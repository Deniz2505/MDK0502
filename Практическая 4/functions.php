
<h1> Функции </h1>

<h2> Задание 1</h2>

<?php

function circleLength ($r)
{
    return 2 * pi() * $r;
}
$radius = 5;

echo 'Радиус = ' , $radius;

echo '<p> Длина окружности - ' . circleLength (5) . '</p>';

?>


<h2> Задание 2. Площадь треугольника</h2>

<form method="post">
    Сторона A: <input type="number" step="any" name="a" required>
    <br><br>
    Сторона B: <input type="number" step="any" name="b" required>
    <br><br>
    Сторона C: <input type="number" step="any" name="c" required>
    <br><br>
    <button type="submit" name="triangle">Вычислить</button>
</form>

<?php

function triangleArea ($a, $b, $c)
{
    if ($a <= 0 || $b <= 0 || $c <= 0)
    {
        return 0;
    }

    if ($a + $b <= $c || $a + $c <= $b || $b + $c <= $a)
    {
        return 0;
    }

    $p = ($a + $b + $c) / 2;

    return sqrt($p * ($p - $a) * ($p - $b) * ($p - $c));
}

if (isset($_POST['triangle']))
{
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];

    echo '<p> Площадь треугольника - ' . triangleArea ($a, $b, $c) . '</p>';
}

?>

<h2> Задание 3. Наибольший делитель числа</h2>

<?php

function largestDivisor ($number)
{
    for ($i = $number - 1; $i >= 1; $i--)
    {
        if ($number % $i == 0)
        {
            return $i;
        }
    }

    return 0;
}

echo '<p> Наибольший делитель - ' . largestDivisor (12) . '</p>';

?>

<h2> Задание 4. Все делители числа</h2>

<?php

function allDivisors ($number)
{
    $divisors = [];

    for ($i = 1; $i <= $number; $i++)
    {
        if ($number % $i == 0)
        {
            $divisors[] = $i;
        }
    }

    return $divisors;
}

$numbers = allDivisors (12);

echo '<p> Все делители: </p>';

foreach ($numbers as $number)
{
    echo $number . ' ';
}

?>

<h2> Задание 5. Сумма квадратов массива</h2>

<?php

function sumSquares ($numbers)
{
    $sum = 0;

    foreach ($numbers as $number)
    {
        $sum = $sum + $number * $number;
    }

    return $sum;
}

$numbers = [2, 3, 4];

echo '<p> Сумма квадратов - ' . sumSquares ($numbers) . '</p>';

?>

<h2> Задание 6. Преобразование массива в строку</h2>

<?php

function convertToString ($array)
{
    $result = '';

    foreach ($array as $item)
    {
        if (is_array($item))
        {
            $result = $result . 'array, ';
        }
        else
        {
            $result = $result . $item . ', ';
        }
    }

    return $result;
}

$words = ['Привет', 'Пока', 'PHP', [1, 2, 3], 'HTML'];

echo convertToString ($words);

?>

<h2> Задание 7. Переменное количество параметров</h2>

<?php

function totalLength (...$strings)
{
    $length = 0;

    foreach ($strings as $string)
    {
        $length = $length + strlen($string);
    }

    return $length;
}

echo '<p> Общая длина строк - ' . totalLength ('Привет', 'Пока', 'PHP') . '</p>';

?>

<h2> Задание 8. Рекурсия</h2>

<?php

function convertToStringRecursive ($array)
{
    $result = '';

    foreach ($array as $item)
    {
        if (is_array($item))
        {
            $result = $result . convertToStringRecursive ($item);
        }
        else
        {
            $result = $result . $item . ', ';
        }
    }

    return $result;
}

$words = ['Привет', 'PHP', ['HTML', 'CSS'], 'Пока'];

echo convertToStringRecursive ($words);

?>
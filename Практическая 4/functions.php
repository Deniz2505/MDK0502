
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

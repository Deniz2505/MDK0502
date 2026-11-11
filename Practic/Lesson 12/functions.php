
<h1> Функции </h1>

<h2> Определение функции и её вызов</h2>

<?php

function sayHello ()
{
    echo '<p> Привет! </p>';
}

sayHello ();
sayHello ();
sayHello ();

?>

<h2> Передача в функцию параметров</h2>

<?php

function sayHello1 ($name)
{
    echo "<p> Привет, $name! </p>";
}

sayHello1 ('Вася');
sayHello1 ('Петя');
sayHello1 ('Коля');

?>

<?php

function printFullName ($fName, $Name)
{
    echo "$fName $Name";
}

printFullName ('Ваня', 'Иванов');

?>

<h2> Функции с параметрами по умолчанию</h2>

<?php

function printUserinfo ($fName, $Name, $role = 'user')
{
    echo "$fName $Name, $role";
}

printUserinfo ('Коля', 'Иванов', 'student');

printUserinfo ('Вася', 'Петров');

?>

<h2> Возвращаемое значение</h2>

<?php

function getUserinfo ($fName, $Name, $role = 'user')
{
    return "$fName, $Name, роль - $role";
}

$info = getUserinfo ('Маша', 'Иванова');

echo $info;


function squareRect ($l, $w)
{
    return $l * $w;
}

echo '<p> Площадь - ' . squareRect (20, 5) . '</p>';

?>

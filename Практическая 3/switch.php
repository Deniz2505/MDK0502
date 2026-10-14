<h2>Задача 1</h2>






<form action = " ">

<p>Введите цифру: </p>

<input  name = "number">

<input type = "submit" value = "Отправить"  >

</form>



<?php


if(isset ($_GET ['number'])) {

$a = $_GET ['number'];



switch ($a) {

    case 0:
        echo 'zero';
        break;

    case 1:
        echo 'one';
        break;

    case 2:
        echo 'two';
        break;

    case 3:
        echo 'three';
        break;

    case 4:
        echo 'four';
        break;

    case 5:
        echo ' five';
        break;

    case 6:
        echo ' six';
        break;

    case 7:
        echo 'seven';
        break;

    case 8:
        echo 'eight';
        break;

    case 9:
        echo 'nine';
        break;

    default:
        echo 'Число не найдено';
}

} else {

echo "Нет данных";

}





?>




<h2>Задача 2</h2>



<form action = " ">

<p>Введите число: </p>

<input  name = "number">

<input type = "submit" value = "Отправить"  >

</form>



<?php

if(isset ($_GET ['number'])) {


$b = $_GET ['number'];


switch ($b) {

    case 1:
        echo '1 января - Новый год';
        break;

    case 2:
        echo '23 февраля - День защитника Отечества';
        break;

    case 3:
        echo '8 марта - Женский день';
        break;

    case 4:
        echo '12 апреля - День космонавтики';
        break;

    case 5:
        echo '9 мая - День Победы';
        break;

    case 6:
        echo '12 июня - День России';
        break;

    case 7:
        echo '8 июля - День семьи';
        break;

    case 8:
        echo '22 августа - День флага';
        break;

    case 9:
        echo '1 сентября - День знаний';
        break;

    case 10:
        echo '5 октября - День учителя';
        break;

    case 11:
        echo '4 ноября - День народного единства';
        break;

    case 12:
        echo '12 декабря - День Конституции';
        break;

    default:
        echo 'Месяц не найден';
}

} else {



echo "Нет данных";

}


?>






<h2> Задача 3 </h2>


<form action = " ">

<p>Введите число: </p>

<input  name = "number">

<input type = "submit" value = "Отправить"  >

</form>



<?php


if(isset ($_GET ['number'])) {


$c = $_GET ['number'];


switch ($c % 10) {

    case 0:
        echo '0';
        break;

    case 1:
        echo '1';
        break;

    case 2:
        echo '4';
        break;

    case 3:
        echo '9';
        break;

        case 4:
        echo '16';
        break;

        case 5:
        echo '25';
        break;

        case 6:
        echo '36';
        break;
            case 7:
        echo '49';
        break;

        case 8:
        echo '64';
        break;

        case 9:
        echo '81';
        break;
      default:
        echo 'Число не найдено';
}

} else {

echo "Нет данных";


}


?>




<h2>Задача 4</h2>

<form action = " ">

<p>Введите сколько лет : </p>

<input  name = "number">

<input type = "submit" value = "Отправить"  >

</form>







<?php


if(isset ($_GET ['number'])) {


$d = $_GET ['number'];


if ($d >= 11 && $d <= 14) {
    echo "Мне $d лет";
} else {

    switch ($d % 10) {

        case 1:
            echo "Мне $d год";
            break;

        case 2:
        case 3:
        case 4:
            echo "Мне $d года";
            break;

        default:
            echo "Мне $d лет";
    }
}

} else {
echo "Нет данных";

}

?>
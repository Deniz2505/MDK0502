<h1> Ассоциативные массивы</h1>

<h2>Создание массива </h2>

<?php

$numbers = ['one' => 1  , 'two' => 2 ,'three' => 3 , 'four' => 4 , 'five' => 5];

?>


<h2> Вывод на экран </h2>


<?php

foreach ($numbers as $number) {

echo $number , ', ';

}

?>



<h2> Обращениек элементу</h2>



<?php

echo $numbers ['two'] ;

$numbers ['two'] = '2';


?>


<h2> Добавление элемента (создание)</h2>

<?php

$numbers ['seven'] = 7 ;

$numbers [] = 8;

$numbers [6] = 6;

$numbers [] =22;


?>


<h2>Вывод вместе с ключами </h2>

<?php

foreach ($numbers as $key => $value ) {

echo "$key - $value , <br>";

}

?>

<h2>Строка</h2>

<?php

$str = 'qwerty';

echo $str [3], '<br>';

$str [3] = 'w';

$len = strlen ($str);

echo "Длина строки: $str - $len символов"

?>



<h2>Задача 6</h2>

<?php

$words = [
    'Привет' => 'hello',
    'До свидания' => 'goodbye',
    'Вверх' => 'up',
    'Вниз' => 'down',
    'Влево' => 'left',
    'Вправо' => 'right',
    'ДА' => 'yes',
    'Нет' => 'no',
    'Правда' => 'True',
    'Ложь' => 'False',
    'Ничего' => 'Nothing'
];

$newWords = [];

foreach ($words as $key => $value) {
    $newWords[$value] = $key;
}

foreach ($newWords as $key => $value) {
    echo "$key - $value <br>";
}

?>
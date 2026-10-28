<h2>Задача 1</h2>

<?php

$words = ['Привет' => 'hello', 'До свидания' => 'goodbye', 'Вверх' => 'up' , 'Вниз' => 'down' , 'Влево' => 'left' , 'Вправо' => 'right' , 'Да' => 'yes' , 'Нет' => 'no', 'Правда' => 'True', 

 'Ложь' => 'False', 'Ничего' => 'Nothing',  ]  ;



?>

<?php

foreach ($words as $word) {

echo $word , ',  ' ;

}

echo '<br>' , '<br>';

?>


<?php


foreach ($words as $key => $value ) {

echo "$key - $value , <br>  <br>";

}

?>


<h2>Задача 2</h2>

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
    'Ничего' 
];


$word = 'Привет';
$found = false;

foreach ($words as $key => $value) {

    if ($word == $key) {
        echo "$key - $value";
        $found = true;
    }
}

if ($found == false) {
    echo 'В словаре нет такого слова';
}

?>




<h2>Задача 3</h2>

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

$word = 'hello';
$found = false;

foreach ($words as $key => $value) {

    if ($word == $key) {
        echo "$key - $value";
        $found = true;
    }

    if ($word == $value) {
        echo "$value - $key";
        $found = true;
    }
}

if ($found == false) {
    echo 'В словаре нет такого слова';
}

?>


<h2>Задача 4</h2>

<form method="GET">
    <input type="text" name="word">
    <input type="submit" value="Перевести">
</form>

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

if (isset($_GET['word'])) {

    $word = $_GET['word'];
    $found = false;

    foreach ($words as $key => $value) {

        if ($word == $key) {
            echo "$key - $value";
            $found = true;
        }

        if ($word == $value) {
            echo "$value - $key";
            $found = true;
        }
    }

    if ($found == false) {
        echo 'В словаре нет такого слова';
    }
}

?>


<h2>Задача 5</h2>

<?php

$str = 'hello';
$letters = [];

for ($i = 0; $i < strlen($str); $i++) {

    $letter = $str[$i];

    if (isset($letters[$letter])) {
        $letters[$letter]++;
    } else {
        $letters[$letter] = 1;
    }
}

foreach ($letters as $key => $value) {
    echo "$key - $value <br>";
}

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


<h2>Задача 7</h2>

<?php

$words = ['кот', 'дом', 'лес', 'слон', 'мышь'];

$newWords = [];

foreach ($words as $word) {

    $len = strlen($word);

    if (isset($newWords[$len])) {
        $newWords[$len] = $newWords[$len] . ' ' . $word;
    } else {
        $newWords[$len] = $word;
    }
}

foreach ($newWords as $key => $value) {
    echo "$key - $value <br>";
}

?>
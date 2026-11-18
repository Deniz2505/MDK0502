<h2>Задание 1</h2>

<?php

$str = 'Hello (my friend) world';

echo $str , '<br>';

$i = 0;
$start = 0;
$end = 0;

while ($i < strlen($str)) {

    if ($str[$i] == '(') {
        $start = $i;
    }

    if ($str[$i] == ')') {
        $end = $i;
    }

    $i++;
}

$i = $start + 1;

while ($i < $end) {
    echo $str[$i];
    $i++;
}

?>





<h2>Задание 2</h2>

<?php

$str = 'Hello my friend';

echo $str , '<br>'; 

$i = 0;
$count = 0;

while ($i < strlen($str)) {

    if ($str[$i] == ' ') {
        $count++;
    }

    $i++;
}

$count++;

echo "Количество слов: $count";

?>





<h2>Задание 3</h2>

<?php

$str = 'level hello radar world madam' ;

echo $str, '<br>', '<br>';

$i = 0;
$word = '';

while ($i < strlen($str)) {

    if ($str[$i] != ' ') {
        $word = $word . $str[$i];
    }

    if ($str[$i] == ' ') {

        if ($word != '') {

            $first = $word[0];
            $last = $word[strlen($word) - 1];

            if ($first == $last) {
                echo $word . '<br>';
            }

            $word = '';
        }
    }

    $i++;
}

$first = $word[0];
$last = $word[strlen($word) - 1];

if ($first == $last) {
    echo $word;
}

?>




<h2>Задание 4</h2>

<?php

$str = 'hello';

$i = 0;
$count = 0;

while ($i < strlen($str)) {

    $j = 0;
    $found = 0;

    while ($j < $i) {

        if ($str[$i] == $str[$j]) {
            $found = 1;
        }

        $j++;
    }

    if ($found == 0) {
        echo $str[$i] . '<br>';
        $count++;
    }

    $i++;
}

echo "Количество разных символов: $count";

?>

<h2>Задание 5</h2>

<?php

$str = 'rabbit king tree';

$i = 0;
$count = 0;

while ($i < strlen($str)) {

    if ($str[$i] == 'r') {
        $count++;
    }

    if ($str[$i] == 'k') {
        $count++;
    }

    if ($str[$i] == 't') {
        $count++;
    }

    $i++;
}

echo "Количество букв r, k, t: $count";

?>

<h2>Задание 6</h2>

<?php

function cleanString($str) {

    $result = '';
    $space = 0;
    $i = 0;

    while ($i < strlen($str)) {

        if ($str[$i] != ' ') {

            if ($space == 1 && $result != '') {
                $result = $result . ' ';
            }

            $result = $result . $str[$i];
            $space = 0;

        } else {
            $space = 1;
        }

        $i++;
    }

    return $result;
}

$str = '   Hello     my     friend   ';

echo cleanString($str);

?>

<h2>Задание 7</h2>

<?php

$str = 'I like playing basketball';

$i = 0;
$word = '';
$min = 100;
$max = 0;

while ($i < strlen($str)) {

    if ($str[$i] != ' ') {
        $word = $word . $str[$i];
    }

    if ($str[$i] == ' ') {

        if ($word != '') {

            $len = strlen($word);

            if ($len < $min) {
                $min = $len;
            }

            if ($len > $max) {
                $max = $len;
            }

            $word = '';
        }
    }

    $i++;
}

if ($word != '') {

    $len = strlen($word);

    if ($len < $min) {
        $min = $len;
    }

    if ($len > $max) {
        $max = $len;
    }
}

echo "Самое короткое слово: $min <br>";
echo "Самое длинное слово: $max";

?>

<h2>Задание 8</h2>

<?php

$str = 'banana aaa apple';

$i = 0;
$count = 0;
$max = 0;

while ($i < strlen($str)) {

    if ($str[$i] == 'a') {

        $count++;

        if ($count > $max) {
            $max = $count;
        }

    } else {
        $count = 0;
    }

    $i++;
}

echo "Самая длинная последовательность букв a: $max";

?>

<h2>Задание 9</h2>

<?php

$str = 'Hello (my friend) world';

$i = 0;
$delete = 0;

while ($i < strlen($str)) {

    if ($str[$i] == '(') {
        $delete = 1;
    }

    if ($delete == 0) {
        echo $str[$i];
    }

    if ($str[$i] == ')') {
        $delete = 0;
    }

    $i++;
}

?>



<h2>Задание 10</h2>

<form method="post">

    <p>Введите строку:</p>

    <input type="text" name="str">

    <br><br>

    <select name="task">
        <option value="1">Задание 1</option>
        <option value="2">Задание 2</option>
        <option value="3">Задание 3</option>
        <option value="4">Задание 4</option>
        <option value="5">Задание 5</option>
        <option value="6">Задание 6</option>
        <option value="7">Задание 7</option>
        <option value="8">Задание 8</option>
        <option value="9">Задание 9</option>
    </select>

    <br><br>

    <button type="submit">Выполнить</button>

</form>

<?php

function task1($str) {

    $i = 0;
    $start = 0;
    $end = 0;

    while ($i < strlen($str)) {

        if ($str[$i] == '(') {
            $start = $i;
        }

        if ($str[$i] == ')') {
            $end = $i;
        }

        $i++;
    }

    $i = $start + 1;

    while ($i < $end) {
        echo $str[$i];
        $i++;
    }
}

function task2($str) {

    $i = 0;
    $count = 0;

    while ($i < strlen($str)) {

        if ($str[$i] == ' ') {
            $count++;
        }

        $i++;
    }

    $count++;

    echo $count;
}

function task3($str) {

    $i = 0;
    $word = '';

    while ($i < strlen($str)) {

        if ($str[$i] != ' ') {
            $word = $word . $str[$i];
        }

        if ($str[$i] == ' ') {

            if ($word != '') {

                $first = $word[0];
                $last = $word[strlen($word) - 1];

                if ($first == $last) {
                    echo $word . '<br>';
                }

                $word = '';
            }
        }

        $i++;
    }

    if ($word != '') {

        $first = $word[0];
        $last = $word[strlen($word) - 1];

        if ($first == $last) {
            echo $word;
        }
    }
}

function task4($str) {

    $i = 0;
    $count = 0;

    while ($i < strlen($str)) {

        $j = 0;
        $found = 0;

        while ($j < $i) {

            if ($str[$i] == $str[$j]) {
                $found = 1;
            }

            $j++;
        }

        if ($found == 0) {
            echo $str[$i] . '<br>';
            $count++;
        }

        $i++;
    }

    echo "Количество: $count";
}

function task5($str) {

    $i = 0;
    $count = 0;

    while ($i < strlen($str)) {

        if ($str[$i] == 'r') {
            $count++;
        }

        if ($str[$i] == 'k') {
            $count++;
        }

        if ($str[$i] == 't') {
            $count++;
        }

        $i++;
    }

    echo $count;
}

function task6($str) {

    $result = '';
    $space = 0;
    $i = 0;

    while ($i < strlen($str)) {

        if ($str[$i] != ' ') {

            if ($space == 1 && $result != '') {
                $result = $result . ' ';
            }

            $result = $result . $str[$i];
            $space = 0;

        } else {
            $space = 1;
        }

        $i++;
    }

    return $result;
}

function task7($str) {

    $i = 0;
    $word = '';
    $min = 100;
    $max = 0;

    while ($i < strlen($str)) {

        if ($str[$i] != ' ') {
            $word = $word . $str[$i];
        }

        if ($str[$i] == ' ') {

            if ($word != '') {

                $len = strlen($word);

                if ($len < $min) {
                    $min = $len;
                }

                if ($len > $max) {
                    $max = $len;
                }

                $word = '';
            }
        }

        $i++;
    }

    if ($word != '') {

        $len = strlen($word);

        if ($len < $min) {
            $min = $len;
        }

        if ($len > $max) {
            $max = $len;
        }
    }

    echo "Короткое слово: $min <br>";
    echo "Длинное слово: $max";
}

function task8($str) {

    $i = 0;
    $count = 0;
    $max = 0;

    while ($i < strlen($str)) {

        if ($str[$i] == 'a') {

            $count++;

            if ($count > $max) {
                $max = $count;
            }

        } else {
            $count = 0;
        }




        $i++;
    }

    echo $max;
}

function task9($str) {

    $i = 0;
    $delete = 0;

    while ($i < strlen($str)) {

        if ($str[$i] == '(') {
            $delete = 1;
        }

        if ($delete == 0) {
            echo $str[$i];
        }

        if ($str[$i] == ')') {
            $delete = 0;
        }

        $i++;
    }
}

if (isset($_POST['str'])) {

    $str = $_POST['str'];
    $task = $_POST['task'];

    echo '<h3>Результат:</h3>';

    if ($task == 1) {
        task1($str);
    }

    if ($task == 2) {
        task2($str);
    }

    if ($task == 3) {
        task3($str);
    }

    if ($task == 4) {
        task4($str);
    }

    if ($task == 5) {
        task5($str);
    }

    if ($task == 6) {
        echo task6($str);
    }

    if ($task == 7) {
        task7($str);
    }

    if ($task == 8) {
        task8($str);
    }

    if ($task == 9) {
        task9($str);
    }
}

?>



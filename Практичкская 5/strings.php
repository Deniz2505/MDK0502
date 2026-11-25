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

    if ($str[$i] != ' ') {  # тек символ не является пробелом
        $word = $word . $str[$i]; # доб сим  к сл
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

        if ($str[$i] == $str[$j]) { # т и п
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

echo $str , '<br>' , '<br>';

$i = 0;
$r = 0;
$k = 0;
$t = 0;

while ($i < strlen($str)) {
    if ($str[$i] == 'r') {
        $r++;
    }

    if ($str[$i] == 'k') {
        $k++;
    }

    if ($str[$i] == 't') {
        $t++;
    }

    $i++;
}

echo "Буква r: $r<br>" , '<br>';
echo "Буква k: $k<br>" , '<br>';
echo "Буква t: $t";
?>






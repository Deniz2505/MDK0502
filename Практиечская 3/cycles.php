<h2>Задача 1</h2>

<?php 



$startNumber = 2;

$multiplier = 3;

$quantity = 5;

echo "Стартовое значение - $startNumber"  , '<br>';

echo " Множитель  - $multiplier " , '<br>' ;

echo "  Количество   - $quantity " , '<br>' ;


for ($i = 0; $i < $quantity; $i++) {

    echo $startNumber . "<br>";

    $startNumber = $startNumber * $multiplier;

}


?>





<h2>Задача 2</h2>






<?php 

$lastnumber = 10;
$sum =0;

echo "  Число, до которого нужно складывать числа    - $lastnumber " , '<br>' ;



for ($i = 1 ; $i<= $lastnumber ; $i ++)  {

$sum  = $sum + $i; 

}


echo " Сумма всех чисел = " , $sum;

?>








<h2> Задача 3 </h2>


<?php

$lastNumber = 10;

$multiplicationResult = 1;


echo "  Число, до которого идёт последовательность   - $lastnumber " , '<br>' ;




for ($i = 1; $i <= $lastNumber; $i++) {
    if ($i % 2 == 0) {
        $multiplicationResult = $multiplicationResult * $i;
    }
}

echo " Произведение  чётных чисел  последовательности = " ,  $multiplicationResult;

?>




<h2> Задача 4 </h2>


<?php


$days = 7;
$distance = 10;
$sum = 0;


echo "Дни = " , $days , '<br>';

echo "Дистанция = " , $distance, '<br>';


for ($i = 1; $i <= $days; $i++) {
    $sum = $sum + $distance;
    $distance = $distance * 1.1;
}

echo "Суммарно = " ,$sum;

?>



<h2> Задача 5 </h2>


<?php

for ($rabbits = 0; $rabbits <= 16; $rabbits++) {
    $geese = (64 - $rabbits * 4) / 2;

    if ($geese >= 0) {
        echo "Кроликов: " . $rabbits . ", гусей: " . $geese . "<br>";
    }
}

?>





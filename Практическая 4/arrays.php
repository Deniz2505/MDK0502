<h2> Задача 1  </h2>



<?php
$a = [5, 2, 9, 1, 7]; 

for ($i = 0; $i < count ($a); $i++){

echo $a[$i],  '  '  ;



}


$max = $a[0]; 
$min = $a[0];


for ($i = 0; $i < 5; $i++) {
    if ($a[$i] > $max) {
        $max = $a[$i];
    }

    if ($a[$i] < $min) {
        $min = $a[$i]; 
    }

}


echo "Максимум: $max<br>";
echo "Минимум: $min";
?>






<h2> Задача 2  </h2>



<?php
$a = [2, 3, 4];  

for ($i = 0; $i < count ($a); $i++){

echo $a[$i],  '  '  ;



}


$sum = 0; 
$proiz = 1; 

for ($i = 0; $i < 3; $i++) {
    $sum = $sum + $a[$i]; 
    $proiz = $proiz * $a[$i]; 
}

echo "Сумма: $sum<br>"; 
echo "Произведение: $proiz"; 
?>






<h2> Задача 3  </h2>



<?php
$a = [2, 4, 6, 8]; // Массив чисел

for ($i = 0; $i < count ($a); $i++){

echo $a[$i],  '  '  ;



}



$sum = 0; 

for ($i = 0; $i < 4; $i++) {
    $sum = $sum + $a[$i]; 
}

echo "Среднее: " . ($sum / 4); 
?>





<h2> Задача 4  </h2>



<?php
$a = [2, -3, 4, -1];
$b = []; 



for ($i = 0; $i < 4; $i++) {

    if ($a[$i] > 0) {

        $b[$i] = $a[$i] * $a[$i];
        
    } else {

        $b[$i] = -$a[$i]; 
    }
}


echo "Старый массив: ";
print_r($a); 

echo "<br>Новый массив: ";
print_r($b); 
?>





<h2> Задача 5  </h2>


<?php
$a = [10, 20, 30, 40, 50]; 

print_r ($a);

for ($i = 0; $i < 5; $i = $i + 2) {
    echo $a[$i] . " "; 
}
?>




<h2> Задача 6  </h2>



<?php
$a = [2, 5, 3, 7, 6, 9]; 



for ($i = 1; $i < 6; $i++) {
    if ($a[$i] > $a[$i - 1]) {
        echo $a[$i] . " "; 
    }
}

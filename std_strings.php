<h2> Задача 1 </h2>


<?php

$str = "Пример (текст внутри) строки";

echo $str , '<br>', '<br>'; 

$start = strpos($str, "(");
$end = strpos($str, ")");

$result = substr($str, $start + 1, $end - $start - 1);

echo $result;

?>





<h2> Задача 2 </h2>


<?php

$str = "Я изучаю PHP строковые функции.";

echo $str , '<br>', '<br>';

$str = rtrim($str, ".");

$arr = explode(" ", $str);

$str2 = implode(" ", $arr);

$count = substr_count($str2, " ") + 1;

echo $count;

?>



<h2> Задача 3 </h2>











<h2> Задача 4 </h2>


<?php





?>







<h2> Задача 5 </h2>


<?php





?>







<h2> Задача 6 </h2>


<?php





?>








<h2> Задача 7 </h2>


<?php





?>








<h2> Задача 8 </h2>


<?php





?>


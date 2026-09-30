
<h1> Типы данных php </h1>
<h2> Целые числа -int </h1>   


<?php

$number = 100;
   
echo  $number;

?>               


<h2> Числа сплавающей точки  - float </h2>



<?php

$a = -42.5;
$b  = 42.;
$c = 1.5e5;
$d = 2.4e-3;

echo "$a , $b , $c , $d" 

?> 


<h2> Строки - string </h2>


<?php
$str1 = 'Я изучаю php';
$str2 = 'Переменная a = $a';
$str3 = "Переменная a = $a";


echo $str1 , '<br>' , $str2 , '<br>' , $str3;

?>


<h2> Логические значения - bool </h2>

<?php

$t = True;
$f = false;

echo "t = $t , f = $f"; 


?>



<h2> Специальные значения null </h2>

<?php

$n = null;          //пустота 


echo "n = $n";


?>
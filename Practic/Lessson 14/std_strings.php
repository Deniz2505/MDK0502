<h1> Стандартные функции для строк </h1>

<h2> Получение длины strlen</h2>

<?php


$str = 'Hello, world';

$strR = 'Привет, мир';

echo 'Длина str ' . strlen($str) . ' символов' , '<br>';

echo 'Длина str ' . mb_strlen($strR) . ' символов' , '<br>';


?>



<h2> Поиск подстроки </h2>


<?php


$pos = strpos ($str , 'world');


echo "Позиция world -  $pos ", '<br>';

echo mb_strpos ($strR , 'мир');

echo "Позиция 'Привет' - $pos" , '<br>';



?>



<h2> Изменение регистра strtoLower </h2>

<?php

$strLow = strtoLower ($str);

echo "Строка в нижнем регистре - $strLow";



?>


<h2>Перевод строки в массив explode  </h2>


<?php

$str1 = 'Работа со строками';

$words = explode (' ' , $str1);

var_dump ($words);

?>


<h2>Перевод  массив в строку  implode   </h2>



<?php

$str2 = implode (',' , $words);

echo $str2;


?>
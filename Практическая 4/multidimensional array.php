<h1>Многомерные массивы PHP</h1>

<?php



echo "<h2>Задание 1</h2>";

$numbers = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12]
];

echo "<table border='1'>";

foreach ($numbers as $row) {

    echo "<tr>";

    foreach ($row as $number) {

        echo "<td>$number</td>";

    }

    echo "</tr>";

}

echo "</table>";






echo "<h2>Задание 2</h2>";

$numbers = [];

for ($i = 10; $i <= 99; $i++) {

    $numbers[] = $i * $i;

}

echo "<table border='1'>";

foreach ($numbers as $key => $number) {

    if ($key % 10 == 0) {
        echo "<tr>";
    }

    echo "<td>$number</td>";

    if ($key % 10 == 9) {
        echo "</tr>";
    }

}

echo "</table>";






echo "<h2>Задание 3</h2>";

$numbers = [
    [5, 8, 2, 9],
    [12, 4, 7, 1],
    [15, 3, 10, 6],
    [11, 20, 14, 13],
    [16, 18, 17, 19]
];

$max = $numbers[0][0];
$min = $numbers[0][0];

$maxRow = 0;
$maxCol = 0;

$minRow = 0;
$minCol = 0;

foreach ($numbers as $row => $group) {

    foreach ($group as $col => $number) {

        if ($number > $max) {

            $max = $number;
            $maxRow = $row;
            $maxCol = $col;

        }

        if ($number < $min) {

            $min = $number;
            $minRow = $row;
            $minCol = $col;

        }

    }

}

echo "Максимум: $max 
";
echo "Строка: $maxRow, столбец: $maxCol 
";

echo "Минимум: $min 
";
echo "Строка: $minRow, столбец: $minCol";






echo "<h2>Задание 4</h2>";

$n = 5;

$numbers = [];

for ($i = 0; $i < $n; $i++) {

    for ($j = 0; $j < $n; $j++) {

        $numbers[$i][$j] = abs($i - $j);

    }

}

foreach ($numbers as $row) {

    foreach ($row as $number) {

        echo $number . " ";

    }

    echo "
";

}







echo "<h2>Задание 5</h2>";

$shop = [

    'Мячи' => [
        'Adidas' => 'Футбольный мяч',
        'Nike' => 'Баскетбольный мяч'
    ],

    'Обувь' => [
        'Puma' => 'Кроссовки'
    ],

    'Одежда' => [],

    'Инвентарь' => [
        'Wilson' => 'Ракетка',
        'Adidas' => 'Перчатки',
        'Nike' => 'Спортивная сумка'
    ]

];

foreach ($shop as $category => $products) {

    echo "<h3>$category</h3>";

    if (empty($products)) {

        echo "Здесь пока нет товаров";

    } else {

        foreach ($products as $company => $product) {

            echo "<p>$company - $product</p>";

        }

    }

}







echo "<h2>Задание 6</h2>";

$newCategory = 'Аксессуары';

$shop[$newCategory] = [];

foreach ($shop as $category => $products) {

    echo "<h3>$category</h3>";

    foreach ($products as $company => $product) {

        echo "<p>$company - $product</p>";

    }

}







echo "<h2>Задание 7</h2>";

$newProducts = [

    'Puma' => 'Спортивные часы',
    'Nike' => 'Рюкзак'

];

$shop['Аксессуары'] = $newProducts;

foreach ($shop as $category => $products) {

    echo "<h3>$category</h3>";

    foreach ($products as $company => $product) {

        echo "<p>$company - $product</p>";

    }

}



echo "<h2>Задание 8</h2>";

$category = 'Обувь';

$newProducts = [

    'Puma' => 'Спортивные кроссовки',
    'Adidas' => 'Беговые кроссовки'

];

if (isset($shop[$category])) {

    foreach ($newProducts as $company => $product) {

        $shop[$category][$company] = $product;

    }

} else {

    $shop[$category] = $newProducts;

}

foreach ($shop as $category => $products) {

    echo "<h3>$category</h3>";

    foreach ($products as $company => $product) {

        echo "<p>$company - $product</p>";

    }

}

?>
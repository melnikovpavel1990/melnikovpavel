<?php

// foreach
$products = [
    ['name' => 'ololo1', 'active' => false, 'price' => 123],
    ['name' => 'ololo2', 'active' => true, 'price' => 123],
    ['name' => 'ololo3', 'active' => false, 'price' => 123],
    ['name' => 'ololo4', 'active' => true, 'price' => 123],
    ['name' => 'ololo5', 'active' => false, 'price' => 123],
    ['name' => 'ololo6', 'active' => true, 'price' => 123],
    ['name' => 'ololo7', 'active' => false, 'price' => 123],
    ['name' => 'ololo8', 'active' => true, 'price' => 123],
];

foreach ($products as $my_product)
{
    if ($my_product['active'])
    {$msg = 'в наличии, цена (рублей)'.' '.$my_product['price'].' ';}
    else  {
        $msg = 'нет в наличии ';
    }
    echo $my_product['name']." ".$msg." ".'<br>';
}

echo 'end foreach'.'<br>';


// таблица умножения
echo '<table border="1">';

for ($a = 1; $a <= 10; $a++) {
    echo '<tr>';
    for ($b = 1; $b <= 10; $b++) {
        echo '<td>' . $a * $b . '</td>';
    }
    echo '</tr>';
}

echo '</table>';


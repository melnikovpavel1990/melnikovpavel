<?php

//Сумма четных положительных элементов массива
$arr = array(3, 10, -18, 4, 0, 15, 7, -7, 9, 1);

for ($i = 0, $sum = 0; $i < 10; $i++)
    if ($arr[$i] > 0 and $arr[$i] % 2 == 0)
        $sum += $arr[$i];

echo 'Сумма четных положительных элементов массива равна '.$sum;

//Среднее арифметическое положительных элементов массива
$arr = array(3, 10, -18, 4, 0, 15, 7, -7, 9, 1);
for ($i = 0, $sum = 0, $a = 0; $i < 10; $i++)
    if ($arr[$i] > 0) {
        $sum += $arr[$i];
        $a += 1;
    }

echo "Среднее арифметическое положительных элементов массива равно " . $sum / $a;

//Сумма и произведение элементов массива
$arr = array(3, 10, -18, 4, 0, 15, 7, -7, 9, 1);
for ($i = 0, $sum = 0, $com = 1; $i < 10; $i++)
    if ($arr[$i] > 0) {
        $sum += $arr[$i];
        $com *= $arr[$i];
    }
print_r($arr);
echo 'Сумма равна ' . $sum . " " . "произведение равно " . $com;

////Элементы массива, которые меньше среднего арифметического
$arr = array(9, 12, 3, 14, 5, 4, 1, 7, 2, 1);
$sum = array_sum($arr);

for ($i = 0; $i < 10; $i++) {
    $i += 1;
}
$b = $sum / $i;                         //Среднее арифметическое
for ($i = 0; $i < 10; $i++) {
    if ($b > $arr[$i]) {
        echo $arr[$i] . " ";
    }
}



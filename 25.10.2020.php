<?php
// min and max
$arr = [1,2,3,-44,55,6,7,8,9,10];

echo min($arr);
echo "<br>";
echo max($arr);
echo "<br>";

// unset  удалить эл и массива
$arr = [1,2,3,-44,55,6,7,8,9,10];
unset($arr[3]);
print_r($arr);
echo "<br>";

// array_push добавляет элемент в массивдобавляет элемент в массив
$arr = [1,2,3,-44,55,6,7,8,9,10];
array_push($arr, 'ololo');
print_r($arr);
echo "<br>";


//array_merge($arr, $arr2) объединяет массивы
$arr1 = [1,2,3,-44,];
$arr2 = [55,6,7,8,9,10];
$i = array_merge ($arr1, $arr2);
echo $i;
echo "<br>";

//array_sum — Вычисляет сумму значений массива
$a = array(1,2,3,-44,55,6,7,8,9,10);
echo array_sum($a) . "<br>";


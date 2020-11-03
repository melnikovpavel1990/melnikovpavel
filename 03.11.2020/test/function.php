<?php
function replace ($rezult) {
$rezult = preg_replace('/^ +| +$|( ) +/m', ' ', $rezult);
echo $rezult;
return $rezult;
}



function str ($word) {
    $word = explode(" ", $word);
    for ($i = 0; $i < count($word); $i++) {
        if (mb_strlen($word[$i]) >= 3 and mb_strlen($word[$i]) <= 5) {
            echo $word[$i]." ";
        }
    }
}


function palindrom ($text){
    $result = str_replace(' ', '', $text);
    print $result . '\r\n';
    $palindrom = strrev($result);
    if ($result == $palindrom) {
        echo "Строка является палидромной.";
    } else {
        echo "Строка не является палидромной.";
    }
    return $text;
}



function maximum($tex){
    $arr = explode(" ", $tex);
    $max = $arr[0];
    for ($i = 0; $i < count($arr); $i++) {
        if (strlen($arr[$i]) >= strlen($max)) {
            $max = $arr[$i];
        }
    }

    echo $max;
    return $tex;
}




function letter ($text) {
    $little = 0;
    $big = 0;
    for ($i = 0; $i < strlen($text); $i++)
        if ($text[$i] >= 'a' and $text[$i] <= 'z') {
            $little++;
        } elseif
        ($text[$i] >= 'A' and $text[$i] <= 'Z') {
            $big++;
        }
    echo "Количество строччных букв - $little, количество прописных букв - $big";
    return $text;
}
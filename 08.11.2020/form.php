<form action='#' method="post">
    <input type="text" name="string">
    <select name="funcName" id="">
        <option value="replace">Задание 1</option>
        <option value="ololo2">Задание 2</option>
        <option value="palindrom">Задание 3</option>
        <option value="maximum">Задание 4</option>
        <option value="letter">Задание 5</option>
    </select>
    <input type="submit" value="send">
</form>


<?php
//include_once __DIR__.'/function.php';
if (!empty($_POST)) {
    $str = $_POST['string'];
    $funcName = $_POST['funcName'];
    if ($funcName == 'replace'){
        replace($str);
    }elseif ($funcName == 'ololo2') {
        ololo2($str);
    }elseif ($funcName == 'palindrom') {
        palindrom($str);
    }elseif ($funcName == 'maximum') {
        echo maximum($str);
    }elseif ($funcName == 'letter') {
        echo letter($str);
    }
}


function replace ($rezult) {
    $rezult = preg_replace('/^ +| +$|( ) +/m', ' ', $rezult);
    echo $rezult;
    return $rezult;
}



function ololo2($word) {
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
?>
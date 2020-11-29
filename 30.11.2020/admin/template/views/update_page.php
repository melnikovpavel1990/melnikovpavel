<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$sql = "UPDATE pages SET ";

foreach ($_POST as $key => $value){
    $sql .= "{$key} = '$value',";
}
$sql = substr($sql, 0,-1);
$sql .= ' where id='.$_GET['id'];

mysqli_query($connection, $sql);
?>
<div>
    <h2>Редактирование успешно!</h2>
    <a href="/admin/?action=list_page" class="btn btn-success">Вернуться назад...</a>
</div>

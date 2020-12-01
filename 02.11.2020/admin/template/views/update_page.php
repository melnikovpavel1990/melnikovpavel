<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

$sql = "UPDATE pages SET ";

foreach ($_POST as $key => $value){
    $sql .= "{$key} = '$value',";
}
$sql = substr($sql, 0,-1);
$id = $_GET['id'];
$sql .= "where id = ? ";
$stmt = mysqli_prepare($connection, $sql);
mysqli_stmt_bind_param($stmt, "s", $id);
mysqli_stmt_execute($stmt);
mysqli_query($connection, $stmt);
//$sql = substr($sql, 0,-1);
//$sql .= ' where id='.$_GET['id'];
//
//mysqli_query($connection, $sql);
?>
<div>
    <h2>Редактирование успешно!</h2>
    <a href="/admin/?action=list_page" class="btn btn-success">Вернуться назад...</a>
</div>

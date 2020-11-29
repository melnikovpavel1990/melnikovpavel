<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
if (isset($_GET['id']) && !empty($_GET['id']) && $_GET['action'] == 'delete_page') {
    //$sql = "DELETE from pages where id = " . $_GET['id'];
    $id = $_GET['id'];
    $sql = "DELETE from pages where id = ?";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, "d", $id);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
//
//    /* получаем значения */
//    mysqli_stmt_fetch($stmt);
//
//
//    $res = mysqli_query($connection, $stmt);
}
?>
<div>Статья успешно удалена</div>
<a href="/admin/?action=list_page" class="btn btn-success">Вернуться назад...</a>

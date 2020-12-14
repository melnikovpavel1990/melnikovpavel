<?php
$sql = "SELECT * from categoryes_name";
$res = mysqli_query($connection, $sql);
$categoryes = mysqli_fetch_all($res, MYSQLI_ASSOC);
?>
<div style="margin-left: 300px">
<div id="page-wrapper" style="margin: 0 auto ">
    <a href="/admin/?action=add_product" class="btn btn-sm btn-success"> Добавить товар</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Название</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($categoryes as $category):?>
            <tr>
                <td><?=$category['category_name']?></td>
                <td>
                    <a href="/admin/?action=edit_product&id=<?=$category['id']?>" class="btn btn-sm btn-success">Редактировать</a>
                    <a href="/admin/?action=delete_product&id=<?=$category['id']?>" class="btn btn-sm btn-danger">Удалить</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
</div>
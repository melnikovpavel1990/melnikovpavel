<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if (isset($_GET['id']) && !empty($_GET['id']) && $_GET['action'] == 'edit_page') {
    $id = $_GET['id'];
    $sql = "SELECT * from pages where id = ?";
    $stmt = mysqli_prepare($connection, $sql);
    mysqli_stmt_bind_param($stmt, "d", $id);
    mysqli_stmt_execute($stmt);
    $res = mysqli_stmt_get_result($stmt);
    $page = mysqli_fetch_assoc($res);
}

$url = isset($page['id']) ? '/admin/?action=update_page&id=' . $page['id'] : '/admin/?action=save_page';


?>
<div id="page-wrapper" style="margin: 0 300px">
    <div class="row">
        <form role="form" method="post" action="<?= $url ?>" enctype="multipart/form-data">

            <div class="form-group">
                <label>Text Input</label>
                <input class="form-control" name="title" value="<?= $page['title'] ?? '' ?>">
                <p class="help-block">Example block-level help text here.</p>
            </div>

            <div class="form-group">
                <label>Text Input</label>
                <input class="form-control" name="page_img" type="file">
                <p class="help-block">Example block-level help text here.</p>
            </div>

            <div class="form-group">
                <label>Text Input</label>
                <input class="form-control" name="author" value="<?= $page['author'] ?? '' ?>">
                <p class="help-block">Example block-level help text here.</p>
            </div>

            <div class="form-group">
                <label>Text Input</label>
                <input class="form-control" name="category" value="<?= $page['category'] ?? '' ?>">
                <p class="help-block">Example block-level help text here.</p>
            </div>

            <div class="form-group">
                <label>Text area</label>
                <textarea class="form-control" rows="3" name="content">
                    <?= $page['content'] ?? '' ?>
                </textarea>
            </div>


            <button type="submit" class="btn btn-outline-success">Добавить статью</button>
            <button type="reset" class="btn btn-outline-danger">Очистить</button>

        </form>
    </div>
</div>
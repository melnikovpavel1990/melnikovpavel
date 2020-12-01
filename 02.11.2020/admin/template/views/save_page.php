<div id="page-wrapper">
    <div class="row">
        <div style="margin: 100px auto">
            <h2>Статья успешно добавлена!</h2>
            <a href="/admin/?action=add_page" class="btn btn-success">Добавить еще статью</a>

            <a href="/admin/?action=list_page" class="btn btn-success">Вернуться на страницу редактирования</a>
        </div>
        <?php
        if (!empty($_POST)) {
            if ($_FILES['page_img']['size'] > 0) {
                $imgUrl = '/images/' . $_FILES['page_img']['name'];
                move_uploaded_file($_FILES['page_img']['tmp_name'],
                    BASE_PATH . '/../images/' . $_FILES['page_img']['name']);
            }
        }
        $title = $_POST['title'];
        $content = $_POST['content'];
        $author = $_POST['author'];
        $category = $_POST['category'];
        $imgUrl = $_POST['img']['name'];
        $sql = "INSERT INTO pages ('title', `content`, `author`, `category`, `img`)
        VALUES (?, ?, ?, ?, ?)
        ";

        $stmt = mysqli_prepare($connection, $sql);
        mysqli_stmt_bind_param($stmt, "sssss", $title,$content, $author, $category, $imgUrl);
        mysqli_stmt_execute($stmt);
        $res = mysqli_stmt_get_result($stmt);
//        $sql = "
//INSERT INTO pages (`title`, `content`, `author`, `category`, `img`)
//VALUES ('{$_POST['title']}', '{$_POST['content']}', '{$_POST['author']}', '{$_POST['category']}',
//'{$imgUrl}')
//";
//        mysqli_query($connection, $sql);
        ?>
    </div>
</div>
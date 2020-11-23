<?php
require_once '../db.php';
?>
    <form action="" method="post">
        <p>Введите название статьи</p>
        <br>
        <input type="text" name="title"/>
        <br>
        <p>Введите URL картинки</p>
        <br>
        <input type="text" name="img"/>
        <br>
        <p>загрузите картинку</p>
        <br>
        <form enctype="multipart/form-data" action="__URL__" method="POST">
            <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
            <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
            <!-- Название элемента input определяет имя в массиве $_FILES -->
            Отправить этот файл: <input name="userfile" type="file" />
            <input type="submit" value="Отправить файл" />
        </form>
        <br>
        <p>Введите содержание статьи</p>
        <br>
        <textarea name="content" id="" cols="30" rows="10"></textarea>
        <br>
        <p>Введите имя автора статьи</p>
        <br>
        <input type="text" name="author"/>
        <br>
        <p>Введите категорию статьи</p>
        <br>
        <input type="text" name="category"/>
        <br>
        <button type="submit">добавить статью</button>
    </form>

<?php

if (!empty($_POST)){
    $sql = "INSERT INTO `pages` (`title`, `img`, `img2`, `content`, `author`, `category`)
    VALUES ('{$_POST['title']}', '{$_POST['img']}', '{$_POST['img2']}', '{$_POST['content']}', '{$_POST['author']}', 
    '{$_POST['category']}')
";
    mysqli_query($connection, $sql);
}

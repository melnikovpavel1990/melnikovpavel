<?php
require_once '../db.php';
echo "Админка";
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
    $sql = "INSERT INTO `pages` (`title`, `img`, `content`, `author`, `category`)
    VALUES ('{$_POST['title']}', '{$_POST['img']}', '{$_POST['content']}', '{$_POST['author']}', 
    '{$_POST['category']}')
";
    mysqli_query($connection, $sql);
}

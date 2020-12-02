<?php

session_start();

//if($_GET['do'] == 'logout'){
//    unset($_SESSION['admin']);
//    session_destroy();
//}
//
//if($_GET['do'] == 'logout'){
//    unset($_SESSION['admin']);
//    session_destroy();
//}
//if(!$_SESSION['admin']){
//    header("Location: index.php");
//    exit;
//}

$action = $_GET['action'] ?? 'dashboard';

define('BASE_PATH', __DIR__);

$fullPath = BASE_PATH.'/template/views/'.$action.'.php';
require_once BASE_PATH.'/../core/db.php';
//$_SESSION['user'] = [
//    'name'=> 'Pavel',
//    'lastName'=> 'Melnikov',
//    'role' => 'admin'
//];

if(!isset($_SESSION['user']) && empty($_SESSION['user'])){

    require_once BASE_PATH.'/template/login.php';
    require_once BASE_PATH.'/template/sing_up.php';
}else{
    require_once BASE_PATH.'/template/admin_layout.php';
}

?>

<a href="index.php?do=logout">Выход</a>

<a href="index.php?do=logout">Выход</a>


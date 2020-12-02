<?php

if (!empty($_POST)) {
    $sql = "SELECT * FROM users where username = '{$_POST['name']}'";
    $res = mysqli_query($connection, $sql);
    $user = mysqli_fetch_assoc($res);

    // and $user['username'] == ($_POST['username'])
    if ($user) {
        if ($user['password'] == md5($_POST['password'])){
            $_SESSION['user'] = $user;

            header("Location: http://homestead.test/admin");
        }
    }
}else{
    header("Location: http://homestead.test/admin/template/sing_up");
}

//session_start();
//var_dump($_POST);
//$admin = 'admin';
//$pass = 'a029d0df84eb5549c641e04a9ef389e5';
//
//if($_POST['submit']){
//    if($admin == $_POST['username'] AND $pass == md5($_POST['pass'])){
//        $_SESSION['admin'] = $admin;
//        header("Location: ../index.php");
//        exit;
//    }else echo '<p>Логин или пароль неверны!</p>';
//}
//
//
//if($_SESSION['admin']){
//    header("Location: ../index.php");
//    exit;
//}

?>

<!DOCTYPE html>
<!--
Template Name: dashgrin - Responsive Bootstrap 4 Admin Dashboard Template
Author: Hencework

License: You must have a valid license purchased only from themeforest to legally use the template for your project.
-->
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>dashgrin I Login</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Toggles CSS -->
    <link href="../../admin_assets/vendors/jquery-toggles/css/toggles.css" rel="stylesheet" type="text/css">
    <link href="../../admin_assets/vendors/jquery-toggles/css/themes/toggles-light.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="../../admin_assets/dist/css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- HK Wrapper -->
<div class="hk-wrapper">

    <!-- Main Content -->
    <div class="hk-pg-wrapper hk-auth-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 pa-0">
                    <div class="auth-form-wrap pt-xl-0 pt-70">
                        <div class="auth-form w-xl-35 w-lg-65 w-sm-85 w-100 card pa-25 shadow-lg">
                            <a class="auth-brand text-center d-block mb-20" href="#">
                                <img class="brand-img" src="../../admin_assets/dist/img/logo-light.png" alt="brand"/>
                            </a>
                            <form method="post" action="">
                                <h1 class="display-4 text-center mb-10">Welcome Back :)</h1>
                                <p class="text-center mb-30">Sign in to your account and enjoy unlimited perks.</p>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" value="" type="text" name="name">
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Password" type="password" value="" name="password">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox mb-25">
                                    <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                    <label class="custom-control-label font-14" for="same-address">Keep me logged in</label>
                                </div>
                                <button class="btn btn-primary">Войти</button>
                                <a class="btn btn-success btn-block" href="">Login</a>
                                <p class="font-14 text-center mt-15">Having trouble logging in?</p>
                                <div class="option-sep">or</div>
                                <div class="form-row">
                                    <div class="col-md-6 mb-20"><button class="btn btn-indigo btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span></button></div>
                                    <div class="col-md-6 mb-20"><button class="btn btn-primary btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-twitter"></i> </span><span class="btn-text">Login with Twitter</span></button></div>
                                </div>
                                <form action="sing_up.php" method="post">
                                    <button class="btn btn-primary">Sign Up</button>
                                </form>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Main Content -->

</div>
<!-- /HK Wrapper -->

<!-- JavaScript -->

<!-- jQuery -->
<script src="../../admin_assets/vendors/jquery/dist/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../../admin_assets/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="../../admin_assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- Slimscroll JavaScript -->
<script src="../../admin_assets/dist/js/jquery.slimscroll.js"></script>

<!-- Fancy Dropdown JS -->
<script src="../../admin_assets/dist/js/dropdown-bootstrap-extended.js"></script>

<!-- FeatherIcons JavaScript -->
<script src="../../admin_assets/dist/js/feather.min.js"></script>

<!-- Init JavaScript -->
<script src="../../admin_assets/dist/js/init.js"></script>
</body>
</html>
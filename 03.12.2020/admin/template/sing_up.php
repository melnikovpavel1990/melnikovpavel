<?php
require_once '../../core/db.php';

$sql = "INSERT INTO `test_blog`.`users` (`username`, `password`)
        VALUES ('{$_POST['username']}', '{$_POST['password']}')";
$result = mysqli_query($connection, $sql);

var_dump($_POST);
//$username = $_POST['username'];
//$password = $_POST['password'];
//$lastname = $_POST['author'];
//$category = $_POST['category'];
//$imgUrl = $_POST['img']['name'];
//$sql = "INSERT INTO pages ('username', `password`)
//        VALUES (?, ?)
//        ";
//
//$stmt = mysqli_prepare($connection, $sql);
//mysqli_stmt_bind_param($stmt, "ss", $username,$password);
//mysqli_stmt_execute($stmt);
//$res = mysqli_stmt_get_result($stmt);
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
    <title>dashgrin I Signup</title>
    <meta name="description" content="A responsive bootstrap 4 admin dashboard template by hencework" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="../../admin_assets/favicon.ico">
    <link rel="icon" href="../../admin_assets/favicon.ico" type="image/x-icon">

    <!-- Custom CSS -->
    <link href="../../admin_assets/dist/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<!-- HK Wrapper -->
<div class="hk-wrapper">

    <!-- Main Content -->
    <div class="hk-pg-wrapper hk-auth-wrapper">
        <header class="d-flex justify-content-between align-items-center">
            <a class="d-flex auth-brand" href="#">
                <img class="brand-img" src="../../admin_assets/dist/img/logo-dark.png" alt="brand" />
            </a>

        </header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 pa-0">
                    <div class="auth-cover-img overlay-wrap" style="background-image:url(dist/img/bg1.jpg);">
                        <div class="auth-cover-info py-xl-0 pt-100 pb-50">
                            <div class="auth-cover-content w-xxl-75 w-sm-90 w-100">
                                <h1 class="display-3 text-white mb-20">Enjoy unlimited beautiful display content area</h1>
                                <p class="text-white">The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software.</p>
                                <div class="play-wrap">
                                    <a class="play-btn" href="#"></a>
                                    <span>How it works ?</span>
                                </div>
                            </div>
                        </div>
                        <div class="bg-overlay bg-trans-dark-50"></div>
                    </div>
                </div>
                <div class="col-xl-7 pa-0">
                    <div class="auth-form-wrap py-xl-0 py-50">
                        <div class="auth-form w-xxl-65 w-xl-75 w-sm-90 w-100 card pa-25 shadow-lg">
                            <form>
                                <h1 class="display-4 mb-10">Sign up for free</h1>
                                <p class="mb-30">Create your account and start your free trial today</p>
                                <div class="form-row">
                                    <div class="col-md-6 form-group">
                                        <input class="form-control" placeholder="First name" value="" type="text">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <input class="form-control" placeholder="Last name" value="" type="text">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" type="password">
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Confirm Password" type="password">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><span class="feather-icon"><i data-feather="eye-off"></i></span></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="custom-control custom-checkbox mb-25">
                                    <input class="custom-control-input" id="same-address" type="checkbox" checked>
                                    <label class="custom-control-label font-14" for="same-address">I have read and agree to the <a href=""><u>term and conditions</u></a></label>
                                </div>
                                <button class="btn btn-success btn-block" type="submit">Register</button>
                                <div class="option-sep">or</div>
                                <div class="form-row">
                                    <div class="col-sm-6 mb-20">
                                        <button class="btn btn-indigo btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-facebook"></i> </span><span class="btn-text">Login with facebook</span></button>
                                    </div>
                                    <div class="col-sm-6 mb-20">
                                        <button class="btn btn-primary btn-block btn-wth-icon"> <span class="icon-label"><i class="fa fa-twitter"></i> </span><span class="btn-text">Login with Twitter</span></button>
                                    </div>
                                </div>
                                <p class="text-center">Already have an account? <a href="login-simple.html">Sign In</a></p>
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
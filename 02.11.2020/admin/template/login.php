<?php
if (!empty($_POST)) {
    $sql = "SELECT * FROM users where username = {$_POST['username']}";
    $res = mysqli_query($connection, $sql);
    $user = mysqli_fetch_assoc($res);

    if ($user) {
        if ($user['password'] == md5($_POST['password'])) {
            $_SESSION['session_user'] = $user;
            header("Location: ../index.php");
        }
    }
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
<html lang="en">
<head>
    <title>Login V3</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../../login_assets/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../login_assets/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../login_assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../login_assets/fonts/iconic/css/material-design-iconic-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../login_assets/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../login_assets/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../login_assets/vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../login_assets/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../login_assets/vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../login_assets/css/util.css">
    <link rel="stylesheet" type="text/css" href="../../login_assets/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
        <div class="wrap-login100">
            <form class="login100-form validate-form" method="post">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

                <span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Enter username">
                    <input class="input100" type="text" name="username" placeholder="Username">
                    <span class="focus-input100" data-placeholder="&#xf207;"></span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Enter password">
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100" data-placeholder="&#xf191;"></span>
                </div>

                <div class="contact100-form-checkbox">
                    <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                    <label class="label-checkbox100" for="ckb1">
                        Remember me
                    </label>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Login
                    </button>
                </div>

                <div class="text-center p-t-90">
                    <a class="txt1" href="#">
                        Forgot Password?
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>


<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="../../login_assets/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../../login_assets/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="../../login_assets/vendor/bootstrap/js/popper.js"></script>
<script src="../../login_assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../../login_assets/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../../login_assets/vendor/daterangepicker/moment.min.js"></script>
<script src="../../login_assets/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="../../login_assets/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="../../login_assets/js/main.js"></script>

</body>
</html>
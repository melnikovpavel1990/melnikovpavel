<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">

    <title>Magister - Free html5 template by GetTemplate</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

    <!-- Bootstrap itself -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/magister.css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Wire+One' rel='stylesheet' type='text/css'>
</head>

<!-- use "theme-invert" class on bright backgrounds, also try "text-shadows" class -->
<body class="theme-invert">

<nav class="mainmenu">
    <div class="container">
        <div class="dropdown">
            <button type="button" class="navbar-toggle" data-toggle="dropdown"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <!-- <a data-toggle="dropdown" href="#">Dropdown trigger</a> -->
            <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                <li><a href="#head" class="active">Hello</a></li>
                <li><a href="#about">About me</a></li>
                <li><a href="#themes">Themes</a></li>
                <li><a href="#contact">Get in touch</a></li>
            </ul>
        </div>
    </div>
</nav>


<!-- Main (Home) section -->
<section class="section" id="head">
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-10 col-md-offset-1 col-lg-offset-1 text-center">

                <!-- Site Title, your name, HELLO msg, etc. -->
                <h1 class="title">Admin panel</h1>
                <!-- Nice place to describe your site in a sentence or two -->
                <form action="admin_form.php" method="post">

                    <button type="submit">добавить статью</button>
                </form>

            </div> <!-- /col -->
        </div> <!-- /row -->

    </div>
</section>




<!-- Load js libs only when the page is loaded. -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="assets/js/modernizr.custom.72241.js"></script>
<!-- Custom template scripts -->
<script src="assets/js/magister.js"></script>
</body>
</html>
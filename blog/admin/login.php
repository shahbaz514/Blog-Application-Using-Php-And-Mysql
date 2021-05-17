<?php
ob_start();
session_start();
include "../db/db.php";
if (isset($_SESSION['username']))
{
    echo "<script>window.open('index.php','_self')</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Admin | Normandy Remodeling</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body class="login-page">
<div class="login-box">
    <div class="logo">
        <a href="login.php">Normandy<b>Remodeling</b></a>
        <small>Admin Panel</small>
    </div>
    <div class="card">
        <div class="body">
            <form id="sign_in" method="POST" action="login.php" enctype="multipart/form-data">
                <div class="msg">Sign in to start your session</div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                    <div class="form-line">
                        <input type="text" class="form-control" name="username" placeholder="Username" required autofocus>
                    </div>
                </div>
                <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                    <div class="form-line">
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-8 p-t-5">
                    </div>
                    <div class="col-xs-4">
                        <button class="btn btn-block bg-pink waves-effect" type="submit" name="login">SIGN IN</button>
                    </div>
                </div>
            </form>
            <?php
            if(isset($_POST['login']))
            {
                $userName = mysqli_real_escape_string($db, $_POST['username']);
                $pass = mysqli_real_escape_string($db, $_POST['password']);
                $sql = mysqli_query($db, "SELECT * FROM admins WHERE username = '$userName' AND '$pass'");
                $count = 0;
                $count = mysqli_num_rows($sql);
                if ($count > 0)
                {
                    $_SESSION['username'] = $userName;
                    echo "<script>window.open('index.php','_self')</script>";
                }
                else
                {
                    echo "<script>alert('Your Credentials Does Not Match!')</script>";
                }
            }
            ?>
        </div>
    </div>
</div>

<!-- Jquery Core Js -->
<script src="../plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../plugins/bootstrap/js/bootstrap.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../plugins/node-waves/waves.js"></script>

<!-- Validation Plugin Js -->
<script src="../plugins/jquery-validation/jquery.validate.js"></script>

<!-- Custom Js -->
<script src="../js/admin.js"></script>
<script src="../js/pages/examples/sign-in.js"></script>
</body>

</html>
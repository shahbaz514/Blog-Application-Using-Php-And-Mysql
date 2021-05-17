<?php
ob_start();
session_start();
include "../db/db.php";
if (!isset($_SESSION['username']))
{
    echo "<script>window.open('login.php','_self')</script>";
}
include "inc/head.php";
?>
<body class="theme-blue-grey">
<!-- Page Loader -->
<?php
include "inc/pageLoader.php";
?>
<!-- #END# Page Loader -->
<!-- Top Bar -->
<?php
include "inc/topBar.php";
?>
<!-- #Top Bar -->
<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- User Info -->
        <?php
        include "inc/userInfo.php";
        ?>
        <!-- #User Info -->
        <!-- Menu -->
        <?php include "inc/menu.php"; ?>
        <!-- #Menu -->
        <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2021 <a href="javascript:void(0);">Shahbaz514, Inc.</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.0
            </div>
        </div>
        <!-- #Footer -->
    </aside>
    <!-- #END# Left Sidebar -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            <h2>ADD NEW USER</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ADD NEW USER
                        </h2>
                        <ul class="header-dropdown m-r--5">
                        </ul>
                    </div>
                    <div class="body">
                        <div class="row">
                            <div class="col-sm-6">
                                <form id="sign_up" method="POST" enctype="multipart/form-data" action="addNewUser.php">
                                    <div class="msg">Register a new membership</div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="name" minlength="10" placeholder="name" required autofocus>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="username" minlength="10" placeholder="Username" required autofocus>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">email</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">lock</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="NameSurname" class="col-sm-2 control-label">Image</label>
                                        <div class="col-sm-10">
                                            <div class="form-line">
                                                <input type="file" class="form-control" name="img" required="">
                                            </div>
                                        </div>
                                    </div>
                                    <center><button class="btn btn-block btn-lg bg-pink waves-effect" style="width: 100px;" type="submit" name="addUser">Add User</button></center>
                                </form>
                                <?php
                                if (isset($_POST['addUser']))
                                {
                                    $name = mysqli_real_escape_string($db, $_POST['name']);
                                    $userName = mysqli_real_escape_string($db, $_POST['username']);
                                    $email = mysqli_real_escape_string($db, $_POST['email']);
                                    $pass = mysqli_real_escape_string($db, $_POST['password']);
                                    $confirm = mysqli_real_escape_string($db, $_POST['confirm']);
                                    $temp = explode(".", $_FILES["img"]["name"]);
                                    $newfilename = round(microtime(true)) . '.' . end($temp);
                                    if ($confirm == $pass)
                                    {
                                        $sql = mysqli_query($db, "INSERT INTO `admins`(`username`, `email`, `pass`, `name`, `img`) VALUES ('$userName','$email','$pass','$name','$newfilename')");
                                        if ($sql)
                                        {
                                            move_uploaded_file($_FILES["img"]["tmp_name"], "../images/" . $newfilename);
                                            echo "<script>window.open('allUsers.php','_self')</script>";
                                        }
                                        else
                                        {
                                            echo "<script>alert('Take An Error!')</script>";
                                        }
                                    }
                                }
                                ?>
                            </div>
                            <div class="col-sm-6"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jquery Core Js -->
<script src="../plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap Core Js -->
<script src="../plugins/bootstrap/js/bootstrap.js"></script>

<!-- Select Plugin Js -->
<script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

<!-- Slimscroll Plugin Js -->
<script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

<!-- Waves Effect Plugin Js -->
<script src="../plugins/node-waves/waves.js"></script>

<!-- Jquery DataTable Plugin Js -->
<script src="../plugins/jquery-datatable/jquery.dataTables.js"></script>
<script src="../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
<script src="../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
<script src="../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
<script src="../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
<script src="../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
<script src="../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
<script src="../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
<script src="../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

<!-- Custom Js -->
<script src="../js/admin.js"></script>
<script src="../js/pages/tables/jquery-datatable.js"></script>

<!-- Demo Js -->
<script src="../js/demo.js"></script>
</body>

</html>

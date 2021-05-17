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
            <h2>Add New Post</h2>
        </div>

        <!-- Exportable Table -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            Add New Post
                        </h2>
                    </div>
                    <div class="body">
                        <form action="" method="post" enctype="multipart/form-data">
                            <label for="email_address">Title:*</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Title" name="title" required autofocus>
                                </div>
                            </div>
                            <label for="email_address">Category:*</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <select class="form-control show-tick" name="cat" required="">
                                        <option value="">--Select Category--</option>
                                        <?php
                                        $cat = mysqli_query($db, "SELECT * FROM category ORDER BY name ASC");
                                        while ($rowCat = mysqli_fetch_array($cat))
                                        {
                                            echo "<option value='".$rowCat['id']."'>".$rowCat['name']."</option>";
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <label for="email_address">Image:*</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="file" class="form-control" title="Image" name="img" required>
                                </div>
                            </div>
                            <label for="email_address">Description:*</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <textarea class="form-control" name="description" rows="6" style="resize: vertical" required></textarea>
                                </div>
                            </div>
                            <label for="email_address">Tags:*</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Tages" name="tags" required>
                                </div>
                            </div>


                            <label for="email_address">Keywords:*</label>
                            <div class="form-group">
                                <div class="form-line">
                                    <input type="text" class="form-control" placeholder="Keywords" name="keywords" required>
                                </div>
                            </div>
                            <hr>
                            <button type="submit" class="btn btn-danger m-t-15 waves-effect" name="addPost">Add Post</button>
                        </form>
                        <?php
                        if (isset($_POST['addPost']))
                        {
                            $title = mysqli_real_escape_string($db, $_POST['title']);
                            $cat = mysqli_real_escape_string($db, $_POST['cat']);
                            $description = mysqli_real_escape_string($db, $_POST['description']);
                            $tags = mysqli_real_escape_string($db, $_POST['tags']);
                            $keywords = mysqli_real_escape_string($db, $_POST['keywords']);
                            $temp = explode(".", $_FILES["img"]["name"]);
                            $newfilename = round(microtime(true)) . '.' . end($temp);
                            $date = date("jS F Y");
                            $sqlAdd = mysqli_query($db, "INSERT INTO `posts`(`title`, `description`, `img`, `cat`, `username`, `tags`, `keywords`, `date`) 
                                                                            VALUES ('$title', '$description','$newfilename','$cat','".$_SESSION['username']."','$tags','$keywords','$date')");
                            if ($sqlAdd)
                            {
                                move_uploaded_file($_FILES["img"]["tmp_name"], "../images/" . $newfilename);
                                echo "<script>window.open('allPosts.php', '_self')</script>";
                            }
                            else
                            {
                                echo "<script>alert('Take An Error! Try Again')</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Exportable Table -->
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

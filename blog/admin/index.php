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
        <?php
        include "inc/menu.php";
        ?>
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
            <h2>DASHBOARD</h2>
        </div>
        <?php
        $sqladmin = mysqli_query($db, "SELECT * FROM admins");
        $countadmin = mysqli_num_rows($sqladmin);
        $sqlcategory = mysqli_query($db, "SELECT * FROM category");
        $countcategory = mysqli_num_rows($sqlcategory);
        $sqlcategory = mysqli_query($db, "SELECT * FROM tags");
        $counttag = mysqli_num_rows($sqlcategory);
        $sqlposts = mysqli_query($db, "SELECT * FROM posts");
        $countposts = mysqli_num_rows($sqlposts);
        ?>
        <!-- Widgets -->
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-pink hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">people</i>
                    </div>
                    <div class="content">
                        <div class="text">Total Admins</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo $countadmin; ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-cyan hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">local_post_office</i>
                    </div>
                    <div class="content">
                        <div class="text">Total Posts</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo $countposts; ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-red hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">category</i>
                    </div>
                    <div class="content">
                        <div class="text">Total Categories</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo $countcategory; ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-light-green hover-expand-effect">
                    <div class="icon">
                        <i class="material-icons">tag</i>
                    </div>
                    <div class="content">
                        <div class="text">Total Tags</div>
                        <div class="number count-to" data-from="0" data-to="<?php echo $counttag; ?>" data-speed="1000" data-fresh-interval="20"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Widgets -->
        <!-- CPU Usage -->
        <div class="row clearfix">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-xs-12 col-sm-6">
                                <h2>CPU USAGE (%)</h2>
                            </div>

                        </div>
                    </div>
                    <div class="body">
                        <div id="real_time_chart" class="dashboard-flot-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# CPU Usage -->

        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            ALL USERS
                        </h2>
                        <ul class="header-dropdown m-r--5">
                        </ul>
                    </div>
                    <div class="body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover ">
                                <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>UserName</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Email</th>
                                    <th>Last Exit</th>
                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Sr.</th>
                                    <th>UserName</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Email</th>
                                    <th>Last Exit</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                <?php
                                $count = 0;
                                $sqlPro = mysqli_query($db, "SELECT * FROM `admins` ORDER BY username ASC");
                                while ($rowPro = mysqli_fetch_array($sqlPro))
                                {
                                    $count++;
                                    ?>
                                    <tr>
                                        <td><?php echo $count; ?></td>
                                        <td><?php echo $rowPro['username']; ?></td>
                                        <td><?php echo $rowPro['name']; ?></td>
                                        <td><img src="../images/<?php echo $rowPro['img']; ?>" class="img-thumbnail img-responsive" style="width: 100px; height: 100px;"></td>
                                        <td><?php echo $rowPro['email']; ?></td>
                                        <td><?php echo $rowPro['date']; ?></td>
                                    </tr>
                                    <?php
                                }
                                ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php
include "inc/footer.php";
?>

<?php
include "db/db.php";
include "inc/head.php";
?>
<body>
<?php
include "inc/topHeader.php";
include "inc/bottomHeader.php";
?>
<?php 
if (isset($_GET['blog'])) {

    $sqlPosts = mysqli_query($db, "SELECT * FROM `posts` WHERE id = '".$_GET['blog']."'");
    $countP = mysqli_num_rows($sqlPosts);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <section class="pad-top-60 pad-bot-60">
                    <div class="container">
                <?php   
                if ($countP > 0) {
                    $rowPosts = mysqli_fetch_array($sqlPosts);
                    $view = $rowPosts['views'];
                    $view = $view + 1;
                    $upP = mysqli_query($db, "UPDATE `posts` SET `views` = '$view' WHERE id = '".$_GET['blog']."'");
                ?>
                        <div class="row">
                            <div class="col-md-12">
                                <p>
    								<span>
    									<span>
    										<a href="index.html">Home</a> »
    										<span>
    											<a href="blog.php">Blog</a> »
    											<span class="breadcrumb_last" aria-current="page"><?php echo $rowPosts['title']; ?></span>
    										</span>
    									</span>
    								</span>
                                </p>
                                <div class="renovate-text">
                                    <h2><?php echo $rowPosts['title']; ?></h2>
                                    <p class="para-text1" style="text-align: justify;">
                                        <?php echo $rowPosts['description']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                <?php
                }
                else
                {
                    echo '<h2>No Post Available!</h2>';
                }
                ?>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
                <?php include "inc/sidebar.php"; ?>
            </div>
        </div>
    </div>
<?php 
}
else{
    echo '
<div class="container">
        <div class="row">
            <div class="col-md-8">
                <section class="pad-top-60 pad-bot-60">
                    <div class="container">
                        <h2>No Post Available</h2>
                    </div>
                </section>
            </div>
            <div class="col-md-4">
            '; 
            include "inc/sidebar.php";
            ?>
            <?php
            echo'
            </div>
        </div>
    </div>';
}
include "inc/footer.php"; 
?>
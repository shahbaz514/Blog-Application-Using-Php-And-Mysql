<?php
include "db/db.php";
include "inc/head.php";
?>
<body>
<?php
include "inc/topHeader.php";
include "inc/bottomHeader.php";
?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <section class="pad-top-60 pad-bot-60">
                <div class="container">
                <?php

                if (isset($_GET['pageno'])) {
                    $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }

                $no_of_records_per_page = 5;
                $offset = ($pageno-1) * $no_of_records_per_page;

                if (isset($_POST['search'])) {
                    echo "<h1>Searched Results</h1>";
                    $search = $_POST['s'];
                    $sqlPosts = mysqli_query($db, "SELECT * FROM `posts` WHERE title LIKE '%$search%' OR keywords LIKE '%$search%' ORDER BY id DESC");
                    $count = mysqli_num_rows($sqlPosts);
                    if ($count > 0) {
                        while ($rowPosts = mysqli_fetch_array($sqlPosts))
                        {
                ?>
                
                    
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <div class="renovate-image1">
                                <a href="single.php?blog=<?php echo $rowPosts['id']; ?>">
                                    <img src="images/<?php echo($rowPosts['img']) ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                            <div class="renovate-text">
                                <a class="" href="single.php?blog=<?php echo $rowPosts['id']; ?>"><h2><?php echo $rowPosts['title']; ?></h2></a>
                                <p class="para-text1" style="text-align: justify;">
                                    <?php echo substr($rowPosts['description'], 0, 200); ?>
                                    <a class="view-article" href="single.php?blog=<?php echo $rowPosts['id']; ?>">more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                        }
                    }
                    else {
                         echo '<h2>No Post Available!</h2>';
                     } 
                }
                else if (isset($_GET['tag'])) {
                    echo "<h1>Posts By Tag</h1>";
                    $sqlTag = mysqli_query($db, "SELECT * FROM tags WHERE id = '".$_GET['tag']."'");
                    $rowT = mysqli_fetch_array($sqlTag);

                    $vi = $rowT['views'];
                    $vi =$vi + 1;
                    $upS = mysqli_query($db, "UPDATE tags SET views = '$vi' WHERE id = '".$_GET['tag']."'");
                    $sqlPosts = mysqli_query($db, "SELECT * FROM `posts` WHERE tags LIKE '%".$rowT['name']."%' ORDER BY id DESC");
                    $count = mysqli_num_rows($sqlPosts);
                    if ($count > 0) {
                        while ($rowPosts = mysqli_fetch_array($sqlPosts))
                        {
                ?>
                
                    
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <div class="renovate-image1">
                                <a href="single.php?blog=<?php echo $rowPosts['id']; ?>">
                                    <img src="images/<?php echo($rowPosts['img']) ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                            <div class="renovate-text">
                                <a class="" href="single.php?blog=<?php echo $rowPosts['id']; ?>"><h2><?php echo $rowPosts['title']; ?></h2></a>
                                <p class="para-text1" style="text-align: justify;">
                                    <?php echo substr($rowPosts['description'], 0, 200); ?>
                                    <a class="view-article" href="single.php?blog=<?php echo $rowPosts['id']; ?>">more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                        }
                    }
                    else {
                         echo '<h2>No Post Available!</h2>';
                     } 
                }
                else if (isset($_GET['cat'])) {
                    echo "<h1>Posts By Category</h1>";

                    $sqlPosts = mysqli_query($db, "SELECT * FROM `posts` WHERE cat = '".$_GET['cat']."' ORDER BY id DESC");
                    $count = mysqli_num_rows($sqlPosts);
                    if ($count > 0) {
                        while ($rowPosts = mysqli_fetch_array($sqlPosts))
                        {
                ?>
                    
                    
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <div class="renovate-image1">
                                <a href="single.php?blog=<?php echo $rowPosts['id']; ?>">
                                    <img src="images/<?php echo($rowPosts['img']) ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                            <div class="renovate-text">
                                <a class="" href="single.php?blog=<?php echo $rowPosts['id']; ?>"><h2><?php echo $rowPosts['title']; ?></h2></a>
                                <p class="para-text1" style="text-align: justify;">
                                    <?php echo substr($rowPosts['description'], 0, 200); ?>
                                    <a class="view-article" href="single.php?blog=<?php echo $rowPosts['id']; ?>">more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                        }
                    }
                    else {
                        echo '<h2>No Post Available!</h2>';
                    }
                }
                else
                {
                    echo "<h1>Latest Posts</h1>";

                    $total_pages_sql = "SELECT COUNT(*) FROM posts";
                    $result = mysqli_query($db,$total_pages_sql);
                    $total_rows = mysqli_fetch_array($result)[0];
                    $total_pages = ceil($total_rows / $no_of_records_per_page);
                    $sqlPosts = mysqli_query($db, "SELECT * FROM `posts` ORDER BY id DESC LIMIT $offset, $no_of_records_per_page");
                    $count = mysqli_num_rows($sqlPosts);
                    if ($count > 0) {
                        while ($rowPosts = mysqli_fetch_array($sqlPosts))
                        {
                ?>
                
                    
                    <div class="row">
                        <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                            <div class="renovate-image1">
                                <a href="single.php?blog=<?php echo $rowPosts['id']; ?>">
                                    <img src="images/<?php echo($rowPosts['img']) ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-8 col-sm-12 col-xs-12">
                            <div class="renovate-text">
                                <a class="" href="single.php?blog=<?php echo $rowPosts['id']; ?>"><h2><?php echo $rowPosts['title']; ?></h2></a>
                                <p class="para-text1" style="text-align: justify;">
                                    <?php echo substr($rowPosts['description'], 0, 200); ?>
                                    <a class="view-article" href="single.php?blog=<?php echo $rowPosts['id']; ?>">more</a>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
                        }
                    }
                    else {
                        echo '<h2>No Post Available!</h2>';
                    }
                    ?>
    <ul class="pagination">
        <li><a href="?pageno=1">First</a></li>
        <li class="<?php if($pageno <= 1){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="<?php if($pageno >= $total_pages){ echo 'disabled'; } ?>">
            <a href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
                    <?php

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
<!-- <div class="pagination">
    <span aria-current="page" class="page-numbers current">1</span>
    <a class="page-numbers" href="">2</a>
    <a class="page-numbers" href="">3</a>
    <a class="next page-numbers" href="">Next &raquo;</a>
</div> -->

<?php include "inc/footer.php"; ?>
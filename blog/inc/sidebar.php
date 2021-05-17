<div class="blog_sidebar" style="margin-top: 20px;">
    <form method="post" action="blog.php" autocomplete="off">
        <div class="row">
            <div class="col-md-10">
                <input type="text" class="form-control"  name="s"  placeholder="Search">
            </div>
            <div class="col-md-2">
                <button name="search" class="btn btn-danger">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form>
    <h5>Papular Posts</h5>
    <style type="text/css">
        .sidebar_ul li{
            display: block;
        }
    </style>
    <ul class="sidebar_ul list-group">
        <?php
        $sqlPapular = mysqli_query($db, "SELECT * FROM `posts` ORDER BY views DESC LIMIT 0,5");
        while ($rowPapular = mysqli_fetch_array($sqlPapular))
        {
            echo '
            <li class="list-group-item">
                <a href="single.php?blog='.$rowPapular['id'].'" title="">'.$rowPapular['title'].'</a>
            </li>
            ';
        }
        ?>
    </ul>
    <h5>Recent Posts</h5>
    <ul class="sidebar_ul list-group">
        <?php
        $sqlRecent = mysqli_query($db, "SELECT * FROM `posts` ORDER BY id DESC  LIMIT 0,5");
        while ($rowRecent = mysqli_fetch_array($sqlRecent))
        {
            echo '
            <li class="list-group-item">
                <a href="single.php?blog='.$rowRecent['id'].'" title="">'.$rowRecent['title'].'</a>
            </li>
            ';
        }
        ?>
    </ul>
    <h5>Categories</h5>
    <ul class="sidebar_ul list-group">
        <?php
        $sqlCategories = mysqli_query($db, "SELECT * FROM `category` ORDER BY name ASC");
        while ($rowCategories = mysqli_fetch_array($sqlCategories))
        {
            $count = 0;
            $sqlPos = mysqli_query($db, "SELECT * FROM posts WHERE cat = '".$rowCategories['id']."'");
            $count = mysqli_num_rows($sqlPos);
            echo '
            <li class="list-group-item">
                <a href="blog.php?cat='.$rowCategories['id'].'" title="">'.$rowCategories['name'].'</a> ('.$count.')
            </li>
            ';
        }
        ?>
    </ul>
    <h5>Popular Tags</h5>
    <?php
    $sqlTags = mysqli_query($db, "SELECT * FROM `tags` ORDER BY views DESC");
    while ($rowTags = mysqli_fetch_array($sqlTags))
    {
        echo '
            <a href="blog.php?tag='.$rowTags['id'].'" class="btn">'.$rowTags['name'].'</a>
        ';
        echo ", ";
    }
    ?>
</div>
<?php
$user = $_SESSION['username'];
$sql = mysqli_query($db, "SELECT * FROM `admins` WHERE username = '$user'");
$row = mysqli_fetch_array($sql);
?>
<div class="user-info">
    <div class="image">
        <?php
        if ($row['img'] != null)
        {
            ?>
            <img src="../images/<?php echo $row['img'];?>" width="48" height="48" alt="User" />
            <?php
        }
        else
        {
            ?>
            <img src="../images/user-lg.jpg" width="48" height="48" alt="User" />
            <?php
        }
        ?>
    </div>
    <div class="info-container">
        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $row['name'];?></div>
        <div class="email"><?php echo $row['email'];?></div>
    </div>
</div>
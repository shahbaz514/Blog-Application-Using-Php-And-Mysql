 <!-- Banner Slider Section Starts Here -->
      <section class="banner-slider">
         <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" data-interval="10000">
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
               <div class="item active banner-bg1">
                  <div class="container">
                     <div class="banner-text">
                        <h3> Source Energy Restoration Professionals </br> Deck Restoration Services Wheaton, IL   
                        </h3>
                        
                        <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                     <ul class="double-list">
                            <li>Full Deck Inspection  </li>                         
                            <li>Paint & Stain Removal  </li>                        
                            <li>Deck Cleaning           </li>                       
                            <li>Carpentry Repair         </li>
                            <li>Complete Wood Restoration </li>
                            <li> Color & Stain Consultation </li>
                            <li>Refinishing with Paint or Stain </li>
                            <li>Rotten Wood Replacements </li>
                               </ul>
                     </div>
                  </div>
                     
                     </div>

                     <div class="email-form email-header-form">

    <form method="post" action="" enctype="multipart/form-data">
        
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-5">
                <p class="email-head">Get a FREE Quote</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-5">
                <input type="text" class="form-control"  name="name1"  placeholder="Your Name">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-5">
                <input type="text" class="form-control" placeholder="Your Email" name="email1">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-5">
                <input type="text" class="form-control" placeholder="Your Phone" name="phone1">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-10">
                <textarea placeholder="Your Message" class="form-control" name="address1"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-5">
                <input type="submit" class="get-quote-but" value="SEND" name="send1" >
            </div>
        </div>
        
    </form>


<?php 
    if (isset($_POST['send1'])) {
        $name = mysqli_real_escape_string($db, $_POST['name1']);
        $phone = mysqli_real_escape_string($db, $_POST['phone1']);
        $email = mysqli_real_escape_string($db, $_POST['email1']);
        $address = mysqli_real_escape_string($db, $_POST['address1']);
        
        $sql = mysqli_query($db ,"INSERT INTO `quote`(`name`, `address`, `phone`, `email`) VALUES ('$name','$address','$phone','$email')");
        if ($sql) {
            echo '<script>window.open("blog.php","_self")</script>';
        }
        else {
            echo '<script>alert("Take An Error. Try Again!")</script>';
            echo '<script>window.open("blog.php","_self")</script>';
        }
    }
?>
                     </div>

                  </div>
               </div>

               <div class="item banner-bg2">
                  <div class="container">
                     <div class="banner-text">
                        <h3> Are You Looking To Refinish Your Wood Deck? We Offer High Quality Deck Services. Give Us A Call Today And Find Out Why We Are A Top Rated Deck Restoration Company In Illinois!</h3>
                        
                     </div>

                     <div class="email-form email-header-form">

    <form method="post" action="" enctype="multipart/form-data">
        
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-5">
                <p class="email-head">Get a FREE Quote</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-5">
                <input type="text" class="form-control"  name="name2"  placeholder="Your Name">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-5">
                <input type="text" class="form-control" placeholder="Your Email" name="email2">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-5">
                <input type="text" class="form-control" placeholder="Your Phone" name="phone2">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-10">
                <textarea placeholder="Your Message" class="form-control" name="address2"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-5">
                <input type="submit" class="get-quote-but" value="SEND" name="send2" >
            </div>
        </div>
        
    </form>


<?php 
    if (isset($_POST['send2'])) {
        $name = mysqli_real_escape_string($db, $_POST['name2']);
        $phone = mysqli_real_escape_string($db, $_POST['phone2']);
        $email = mysqli_real_escape_string($db, $_POST['email2']);
        $address = mysqli_real_escape_string($db, $_POST['address2']);
        
        $sql = mysqli_query($db ,"INSERT INTO `quote`(`name`, `address`, `phone`, `email`) VALUES ('$name','$address','$phone','$email')");
        if ($sql) {
            echo '<script>window.open("blog.php","_self")</script>';
        }
        else {
            echo '<script>alert("Take An Error. Try Again!")</script>';
            echo '<script>window.open("blog.php","_self")</script>';
        }
    }
?>
                     </div>

                  </div>
               </div>

               <div class="item banner-bg4">
                  <div class="container">
                     <div class="banner-text">
                        
                        <h3>A High Quality Deck Restoration & Refinishing Company At Your Service. We Provide Exceptional Deck Repair, Deck Restoration, and Custom Deck Refinishing Service In Illinois, Since 2004!</h3>
                        
                     </div>

                     <div class="email-form email-header-form">

    <form method="post" action="" enctype="multipart/form-data">
        
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-5">
                <p class="email-head">Get a FREE Quote</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-5">
                <input type="text" class="form-control"  name="name3"  placeholder="Your Name">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-5">
                <input type="text" class="form-control" placeholder="Your Email" name="email3">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-5">
                <input type="text" class="form-control" placeholder="Your Phone" name="phone3">
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-10">
                <textarea placeholder="Your Message" class="form-control" name="address3"></textarea>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 m-b-5">
                <input type="submit" class="get-quote-but" value="SEND" name="send3" >
            </div>
        </div>
        
    </form>


<?php 
    if (isset($_POST['send3'])) {
        $name = mysqli_real_escape_string($db, $_POST['name3']);
        $phone = mysqli_real_escape_string($db, $_POST['phone3']);
        $email = mysqli_real_escape_string($db, $_POST['email3']);
        $address = mysqli_real_escape_string($db, $_POST['address3']);
        
        $sql = mysqli_query($db ,"INSERT INTO `quote`(`name`, `address`, `phone`, `email`) VALUES ('$name','$address','$phone','$email')");
        if ($sql) {
            echo '<script>window.open("blog.php","_self")</script>';
        }
        else {
            echo '<script>alert("Take An Error. Try Again!")</script>';
            echo '<script>window.open("blog.php","_self")</script>';
        }
    }
?>

                     </div>

                  </div>
               </div>
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
      </section>
      <!-- Banner Slider Section Ends Here -->

      <!-- Footer Section Starts Here -->
      <footer>
         <div class="container">
            <div class="footer-top">
               <div class="row">
                  <div class="col-md-3">
                     <div class="footer-col">
                        <img src="images/logo.png" width="70%"/>
                        <p class="m-t-20"> Restore your weathered deck into a space that suits you and your family. Make it an excellent den for the children, outdoor room, party space for you, or whatever else you can consider.Call us Today for excellent deck restoration services.</p>
                        <!-- Experience Deck Restorators Section Ends Here 
                           <a href=""><img src="images/facebook.png" /></a>
                           <a href=""><img src="images/twitter.png" /></a>
                           <a href=""><img src="images/instagram.png" /></a>
                           -->
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="footer-col con-foot">
                        <h3> Contact Info </h3>
                        <p><img src="images/location.png" /> Location here</p>
                        <p><img src="images/call.png" /> 773 664 8791</p>
                      <!--  <p><img src="images/phone.png" /> </p>-->
                        <p><img src="images/email.png" />contact@deckrestorationservices.com</p>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="footer-col">
                        <h3> NAVIGATION </h3>
                        <p><i class="fa fa-chevron-right fs-12"></i> <a href="index.html">HOME</a></p>
                        <p><i class="fa fa-chevron-right fs-12"></i> <a href="services.html">SERVICES</a></p>
                        <p><i class="fa fa-chevron-right fs-12"></i> <a href="about.html">ABOUT US</a></p>
                        <p><i class="fa fa-chevron-right fs-12"></i> <a href="jobs.html">GALERY</a></p>
                        <p><i class="fa fa-chevron-right fs-12"></i> <a href="contact.html">CONTACT US</a></p>
                        <p><i class="fa fa-chevron-right fs-12"></i> <a href="blog.php">BLOG</a></p>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="footer-col">
                        <h3> SERVICES </h3>
                        <?php
                        $sqlCategories = mysqli_query($db, "SELECT * FROM `category` ORDER BY name ASC");
                        while ($rowCategories = mysqli_fetch_array($sqlCategories))
                        {
                            $count = 0;
                            $sqlPos = mysqli_query($db, "SELECT * FROM posts WHERE cat = '".$rowCategories['id']."'");
                            $count = mysqli_num_rows($sqlPos);
                            echo '
                                <p><i class="fa fa-chevron-right fs-12"></i> <a href="blog.php?cat='.$rowCategories['id'].'">'.$rowCategories['name'].'</a></p>
                            ';
                        }
                        ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer Section Ends Here -->
      <!-- Bootstrap Javascript -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"> </script>
      <script src="js514/functions.js"> </script>
      <!-- Light Gallery Plugin Js -->
      <script src="plugins/light-gallery/js/lightgallery-all.js"></script>

      <!-- Custom Js -->
      <script src="js/pages/medias/image-gallery.js"></script>
      <script>
    $("#info_form").submit(function(e) {

    e.preventDefault(); // avoid to execute the actual submit of the form.

 $(".submit-btn").val('Sending...');
    var form = $(this);
    var url = form.attr('action');
    
    $.ajax({
           type: "POST",
           url: 'send.php',
           data: form.serialize(), // serializes the form's elements.
           success: function(data)
           { 
               if($.trim(data)=='1'){
                   
               $(".alert-success").show();
               }
           
                $("#info_form")[0].reset();
               $(".submit-btn").val('SEND');
           }
         });

    
});
</script>
   </body>
</html>
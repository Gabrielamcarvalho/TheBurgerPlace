<!-- creating variables -->
<?php $title = 'Home'; ?>
<?php $currentPage = 'index'; ?>
<?php $socialMediaIcons = ['facebook', 'instagram', 'twitter'] ?>


<!-- adding the head -->
<?php include('templates/head.php'); ?>


  <body>
  <!-- adding the navigation -->
    <?php include('templates/navigation.php')?>
      
    
    <!-- hero section -->
    <section class="hero" id="hero">
      <div class="social-media-icons">
      <!-- using foreach loop to loop thought array of social media icons -->
        <?php foreach($socialMediaIcons as $socialMediaIcon) { ?>
         <a href="#"><i class="fa fa-<?=$socialMediaIcon?>"></i></a>
         <!-- close for each -->
          <?php } ?>
      </div>

      <!-- banner -->
      <div class="banner">
        <h1>THE BURGER PLACE</h1>
        <h2>
          The best burger in Dublin for the best price
        </h2>
        <div class="btns">
          <a href="./menu.php" class="btn btn-menu">Menu</a>
            <!-- this link would go to a just eat page, if existed -->
          <a href="#" class="btn">Order Now</a>
        </div>
      </div>
    </section>
    <!-- end of hero section -->

    <!-- section social media-->
    <section class="news-social-media" id="subscription">
      <!-- newsletter subscribe -->
      <div class="newsletter-container">
        <h3 class="subscribe">Subscribe to our newsletter!</h3>
        <p>
          Get updates on upcoming events, new meal deals and juicy promos. You never have to miss out on a tasty treat ever again!
        </p>

          <!-- adding subscribe form -->
        <?php include('templates/subscribe.php') ?>


          </div>
          <!-- end of newsletter section -->

      <div class="divisor"></div>

          
     <div class="reviews-container">
        <h3 class="review-us">Review Us</h3>
          <p>Did you subscribe?</p>
          <p>Leave us a review!</p>

          <!-- reviews form -->
          <?php include('templates/reviews.php') ?>

            <a href="reviewsPage.php" class="btn reviews-btn">Reviews</a>
        </div>
        <!-- end of reviews container -->

          <div class="divisor"></div>

      <!-- follow us section -->
      <div class="follow-us-container">
        <h3 class="follow-us">Follow us</h3>
          <p>Connect with us on social media and be part of our amazing burger loving family.</p>

        <!-- pics from social media -->
        <div class="social-media_images-container">

           <!-- using for loop to loop thought pictures  -->
        <?php for($i = 1; $i <= 4; $i++ ) { ?>
          <div class="social-media-img-container">
            <img src="./images/rsz_social-media<?=$i ?>.jpg" alt="hamburger <?= $i?>" />
          </div>
         <!-- close for loop-->
          <?php } ?>

        </div>
        <!-- end of social media pics -->
      </div>
      <!-- end of follow us -->
    </section>
    <!-- end of section -->
          
    <!-- adding footer-->
    <?php include('templates/footer.php') ?>

    <!-- javascript -->
    <script src="./js/script.js"></script>
  </body>
</html>

<!-- creating variables -->
<?php $title = 'About'; ?>
<?php $currentPage = 'about'; ?>

<!-- adding the head -->
<?php include('templates/head.php'); ?>


  <body>
  <!-- including navigation bar -->
    <?php include('templates/navigation.php')?>

    <!-- about section -->
 <section class="about" id="about">

        <h3 class="about-title">About Us
        </h3>

        <div class="history">
        <h4 class="meet-history">Our history</h4>
        <div class="history-img_container">
        <img src="./images/burgerplace.jpg" alt="The burger place restaurant"></div>

        <p class="history-content">Our meat slapping, flavor popping, spice flexing home of the best Dublin burgers. Founded in 1992, the Burger Place has been making taste buds come alive for the better part of nearly three decades. It is one of the fastest growing burger chains in the whole of Dublin, make no  mistake, this is the home of the amazing ‘Quadruple Whammy’ Burger.

        Our commitment to using the best quality ingredients, sourced from the most reputable live markets in all of Ireland and prepared by the most seasoned burger chefs is what our customers have learnt to expect and trust over the years, and is what keeps the taste buds rolling back.</p> 
        </div>

        <div class="team">
        <h4 class="meet-team">Meet the team</h4>
        

        <p class="team-content">It is not enough for us to have an impact on the taste buds and stomachs of our customers; Our commitment to bringing out the very best in people from across all walks of life is why we provide amazing opportunities to folks from all around the world so that we can consistently provide YOU
        with the best of service while making the world a better place (all in a day’s work).  
 
<div class="team-img_container">
        <img src="./images/team.jpg" alt="The burger place restaurant team"></div>

        </div>

        <div class="burger-about">
        <h4 class="meet-burger">Meet the burger</h4> 

<div class="burger-img_container">
        <img src="./images/burger.png" alt="Image of the burger with details of each layer"></div>
  </section> 
  <!-- end of about section -->

<!-- include footer -->
    <?php include('templates/footer.php') ?>

    <script src="./js/script.js"></script>
  </body>
</html>

<!-- starting database connection-->
<?php include 'config/db_connect.php'?>

<!-- get elements from database -->
<?php 
	// write query for all questions
	$sql = 'SELECT JobId, JobName FROM careers';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$jobs = mysqli_fetch_all($result, MYSQLI_ASSOC);

  // print_r($jobs);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);


?>


<!-- creating variables -->
<?php $title = 'Careers'; ?>


<!-- adding the head -->
<?php include('templates/head.php'); ?>

  <body>
  <!-- adding navigation bar -->
    <?php include('templates/navigation.php')?>

    <!-- careers section -->
 <section class="careers">

  <nav class="nav-careers">
    <ul>
      <li class="careers-logo">The Burger Place | Careers</li>
      <div class="careers-menu">
        <li> <a href="#culture" class="careers-menu_item">Working Culture</a> </li>
        <li > <a href="#job-search" class="careers-menu_item">Search for jobs</a> </li>
      </div>
    </ul>
  </nav>

   <h3 class="careers-title">Work For Us</h3>

  <div class="careers-container container-1 ">
    <h4>Welcome to your world of opportunities</h4>
    <h1>Find your work family in The Burger Place</h1>
    <a href="#job-search" class="btn-2 career-btn">Search Now</a>
  </div>

  <div class="careers-container container-2" id="job-search">
    <h3>Apply Now</h3>
    <div class="jobs">
      <!-- looping through array of jobs and adding in in an 'a' tag -->
      <?php foreach($jobs as $job) {?>

        <a href="#" class="job"><?=$job['JobName']?></a>
     

      <?php } ?>

    </div>
  </div>

  <div class="careers-container container-3">
    <div class="careers-img_container" id="culture">
      <img src="./images/chef (1).jpg" alt="Chef cooking">
    </div>
   
      <blockquote class="quote"> "Working at a place where I constantly bring smiles to peoples faces while been treated with the highest of relevance has been the reason I’ve looked forward to coming to work here most mornings for the last five years" <span class="quote-author"> – Samantha Malwhede, Team member: cook </span> </blockquote>
    
  </div>

 </section>

    <?php include('templates/footer.php') ?>

    <script src="./js/script.js"></script>
  </body>
</html>

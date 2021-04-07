<!-- starting database connection-->
<?php include 'config/db_connect.php'?>

<!-- get elements from database -->
<?php 
	// write query for all questions
	$sql = 'SELECT submitDate, userName, userEmail, review FROM reviews';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$reviews = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);


?>

<!-- creating variables -->
<?php $title = 'Reviews'; ?>
<?php $currentPage = 'reviewsPage'; ?>

<!-- adding the head -->
<?php include('templates/head.php'); ?>

 <body>
  
    <?php include('templates/navigation.php')?>

    <section class="reviews">
         <h3 class="reviews-title">Reviews</h3>
     
    <!-- using php to loop thought array of review from database -->
    <?php foreach($reviews as $review) { ?>
         <!-- single review -->
         <article class="review-container">
            <div class="top">
            <!-- getting user name, date and the review from the database -->
               <p class="user-name"><?=$review['userName'] ?></p>
               <span class="date"><?=$review['submitDate'] ?></span>
            </div>
            <blockquote class="user-review">"<?=$review['review'] ?>"</blockquote>
          
         </article>

      <!-- close foreach -->
    <?php } ?>  
 </section>

    <?php include('templates/footer.php') ?>

    <script src="./js/script.js"></script>
  </body>
</html>

<!-- starting database connection-->
<?php include 'config/db_connect.php'?>

<!-- get elements from database -->
<?php 
	// write query for all questions
	$sql = 'SELECT FaqQuestion, FaqAnswer FROM faq';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$questions = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);


?>

<!-- creating variables -->
<?php $title = 'FAQ'; ?>
<?php $currentPage = 'faq'; ?>

<!-- adding the head -->
<?php include('templates/head.php'); ?>

  <body>
  
    <?php include('templates/navigation.php')?>

    <section class="faq">
         <h3 class="faq-title">FAQ</h3>
     
    <!-- using php to loop thought array of questions from database -->
    <?php foreach($questions as $question) { ?>
         <!-- single question -->
         <article class="question">
          <!-- question title -->
            <div class="question-title">
                <p class="question-faq"><?=$question['FaqQuestion'] ?></p>
                <button type="button" class="question-btn">
                    <span class="plus-icon">
                        <i class="fa fa-plus-square"></i>
                    </span>
                    <span class="minus-icon">
                        <i class="fa fa-minus-square"></i>
                    </span>
                </button>
            </div>
            <!-- question text -->
            <div class="question-text">
                 <p class="answer-faq"><?=$question['FaqAnswer'] ?></p>
            </div>
         </article>

      <!-- close foreach -->
    <?php } ?>  
 </section>

    <?php include('templates/footer.php') ?>

    <script src="./js/script.js"></script>
  </body>
</html>

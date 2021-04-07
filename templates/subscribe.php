<!-- // connect to the database -->
<?php include 'config/db_connect.php' ?>

<?php 

    //if the user submitted
    if(isset($_POST['submit'])){
      //creating variables to store value
     $newsletter_firstName = $_POST['newsletter-firstname'];
        $newsletter_lastName = $_POST['newsletter-lastname'];
        $newsletter_email = $_POST['newsletter-email'];


        //create sql
			$sql = "INSERT INTO subscription(SubFName, SubLName, SubEmail) VALUES ('$newsletter_firstName', '$newsletter_lastName', '$newsletter_email')";

			if(mysqli_query($conn, $sql)){
				// echo 'It worked!';
			} else{
				//error
				// echo 'query error:' . mysqli_error($conn);
			}

			//close connection
			mysqli_close($conn);
    }

?>


<!-- newsletter form -->
        <form class="subscribe-form" action="index.php" method="POST">
        
          <label for="newsletter-firstname" id="newsletter-firstname" ></label>
          <input type="text" name="newsletter-firstname" placeholder="First Name" class="newsletter-firstName" value=""/>

          <label for="newsletter-lastname" id="newsletter-lastname" ></label>
          <input type="text" name="newsletter-lastname" placeholder="Last Name" class="newsletter-lastName" value="" />

          <label for="newsletter-email" id="newsletter-email"></label>
          <input type="email" name="newsletter-email" placeholder="E-mail" class="newsletter-email" value=""/>
          <input type="submit" name="submit" value="submit" class="btn-2">
        
      </form>
        <!-- end of newsletter form -->
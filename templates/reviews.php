<!-- // connect to the database -->
<?php include 'config/db_connect.php' ?>


<!-- ------------ form validation  -->
<?php 

//Get elements from the subscribe database
	$sql = 'SELECT SubFName, SubEmail FROM subscription';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$subscription = mysqli_fetch_all($result, MYSQLI_ASSOC);

    // print_r($subscription);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

//-----------------------------
	//creating and initializing variables
    $emailReview = $nameReview = $review = '';
    
	//creating and initializing array with key and value
	$errors = array('emailReview' => '', 'nameReview' => '', 'review' => '');

	if(isset($_POST['send'])){
		
		// check email - if empty
		if(empty($_POST['reviews-email'])){
			//changing array of errors key and value
            $errors['emailReview'] = 'An email is required';

        } else{
            
			// validate email
			if(!filter_var($_POST['reviews-email'], FILTER_VALIDATE_EMAIL)){
				$errors['emailReview'] = 'Email must be a valid email address';
            }

            //looping though subscription to check if name is there
            foreach($subscription as $user){
                //if name is there
                if($user['SubEmail'] === $_POST['reviews-email']){
                    //add value on the emailReview variable
                    $emailReview = $_POST['reviews-email'];
                } 
            }

            //if email variable is still empty
            if($emailReview = ''){
                    //adding error on the errors array
                    $errors['emailReview'] = 'We couldn\'t find your email in the database, please subscribe!';
                }
            }
		

		// check name, if empty
		if(empty($_POST['reviews-firstName'])){
			//changing array of errors key and value
			$errors['nameReview'] = 'A name is required';
        } else {
			//check regex
			if(!preg_match('/^[a-zA-Z\s]+$/', $_POST['reviews-firstName'])){
				$errors['nameReview'] = 'Name must be letters and spaces only';
            }
            //looping though subscription to check if name is there
            foreach($subscription as $user){
                //if name is there
                if($user['SubFName'] === $_POST['reviews-firstName']){
                    //add value on the emailReview variable
                    $nameReview = $_POST['reviews-firstName'];
             
                } 
            }
            //if after the for each loop the name variable is still empty
                if($nameReview == ''){
                    //adding error on the errors array
                    $errors['nameReview'] = 'We couldn\'t find your first name in the database, please subscribe!';
                }
		}
			

		//check message, if not empty
		if(empty($_POST['review'])){
            $review = '';
 
		}else{
            $review = $_POST['review'];
          
		} 
        

        // print_r($nameReview);
        // print_r($emailReview);
        // print_r($review);
        // print_r($errors);

		//if errors
		if(array_filter($errors)){
            // echo 'errors in form';
            // print_r($errors);
		} else {
			//if valid store on database

			//create sql
			$sql = "INSERT INTO reviews(userName, userEmail, review) VALUES ('$nameReview', '$emailReview', '$review')";

			if(mysqli_query($conn, $sql)){
				// echo 'It worked!';
			} else{
				//error
				echo 'query error:' . mysqli_error($conn);
			}

			//close connection
			mysqli_close($conn);

		}

	} // end POST check
?>


        <!-- reviews form -->
        <form class="reviews-form" action="index.php" method="POST">
        <div class="inputs">
          <label for="reviews-firstname" id="reviews-firstname" ></label>
          <input type="text" name="reviews-firstName" placeholder="First Name" class="reviews-firstName" value="<?php echo htmlspecialchars($nameReview) ?>">  
            <!-- adding error message -->
              <p class="red-text"><?php echo $errors['nameReview'] ?></p>

          <label for="reviews-email" id="reviews-email"></label>
          <input type="email" name="reviews-email" placeholder="E-mail" class="reviews-email" value="<?php echo htmlspecialchars($emailReview) ?>">  
            <!-- adding error message -->
              <p class="red-text"><?php echo $errors['emailReview'] ?></p>

        </div>

        
        <label for="review" id="review"></label>
        <textarea name="review" id="review" placeholder="Write your review..." class="review" value=""></textarea>
       

          <input type="submit" name="send" value="send" class="btn-2">
        
      </form>
        <!-- end of reviews form -->

     </div>
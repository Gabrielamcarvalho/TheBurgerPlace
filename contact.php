<!-- // connect to the database -->
<?php include 'config/db_connect.php' ?>


<!-- creating variables -->
<?php $title = 'Contact'; ?>
<?php $currentPage = 'contact'; ?>


<!-- ------------ form validation  for name and email -->
<?php 
	//creating and initializing variables
	$email = $name = $phone = $message = '';
	//creating and initializing array with key and value
	$errors = array('email' => '', 'name' => '', 'phone' => '', 'message' => '');

	if(isset($_POST['submit'])){
		
		// check email - if empty
		if(empty($_POST['email'])){
			//changing array of errors key and value
			$errors['email'] = 'An email is required';
		} else{
			//storing value of email in the email variable
			$email = $_POST['email'];
			// validate email
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
				$errors['email'] = 'Email must be a valid email address';
			}
		}

		// check name
		if(empty($_POST['name'])){
			//changing array of errors key and value
			$errors['name'] = 'A name is required';
		} else{
			//storing value of name is variable
			$name = $_POST['name'];
			//check regex
			if(!preg_match('/^[a-zA-Z\s]+$/', $name)){
				$errors['name'] = 'Name must be letters and spaces only';
			}
			
		}
		
		//check phone, if not empty
		if(empty($_POST['phone'])){
			//if empty - no error, not necessary for the contact form work
		} else{
			$phone = $_POST['phone'];
			//check regex
				if(!preg_match('/^[0-9]*$/', $phone)){
				$errors['phone'] = 'Phone must be numbers and space only';
			}
		}

		//check message, if not empty
		if(empty($_POST['message'])){
			$message = '';
		}else{
			$message = $_POST['message'];
		} 
	

		//if errors
		if(array_filter($errors)){
			//echo 'errors in form';
		} else {
			//if valid store on database

			//create sql
			$sql = "INSERT INTO contactInfo(UserName, UserEmail, UserPhone, UserMessage) VALUES ('$name', '$email', $phone, '$message')";

			if(mysqli_query($conn, $sql)){
				// echo 'It worked!';
			} else{
				//error
				// echo 'query error:' . mysqli_error($conn);
			}

			//close connection
			mysqli_close($conn);

			//echo 'form is valid' if valid goes back to home page;
			header('Location: index.php');
		}

	} // end POST check
?>




<!-- adding the head -->
<?php include('templates/head.php'); ?>

  <body>
  <!-- adding navigation -->
    <?php include('templates/navigation.php')?>

    <!-- start of contact section -->
 <section class="contact" id="contact">

        <h3 class="contact-title">Contact Us
        </h3>
           
        <form class="contact-box" action="contact.php" method="POST">
            <label for="name" id="name">Name</label>
            <!-- using htmlspecialchars to make it safer -->
            <input type="text" class="field" placeholder="Your Name" name="name" value="<?php echo htmlspecialchars($name) ?>">  
            <!-- adding error message -->
              <p class="red-text"><?php echo $errors['name'] ?></p>
            
            <label for="email" class="email">E-mail</label>
            <input type="email" class="field" placeholder="Your Email" name="email" value="<?php echo htmlspecialchars($email) ?>">
            <!-- adding error message -->
            <span class="red-text"><?php echo $errors['email'] ?></span>

            <label for="phone" id="phone">Phone</label>
			<input type="text" class="field" placeholder="Your Phone" name="phone" value="<?php echo htmlspecialchars($phone) ?>">
			 <span class="red-text"><?php echo $errors['phone'] ?></span>

            <label for="textarea" id="textarea">Message</label>
            <textarea class="area" name="message" value="<?php echo htmlspecialchars($message) ?>"></textarea>
           <input type="submit" value="Submit" name="submit" class="btn contact-btn">
          </form>
      </section>
      <!-- end of contact section -->

    <?php include('templates/footer.php') ?>
    
    <script src="./js/script.js"></script>
  </body>
</html>

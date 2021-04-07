<!-- starting database connection-->
<?php include 'config/db_connect.php'?>

<!-- get elements from database -->
<?php 
	// write query for all questions
	$sql1 = 'SELECT burgName, burgIngredients, burgPrice FROM burgers';
  $sql2 = 'SELECT chickName, chickPieces, chickPrice FROM chicken';
  $sql3 = 'SELECT friesName, friesPrice FROM fries';
  $sql4 = 'SELECT drinksName, drinksPrice FROM drinks';
  $sql5 = 'SELECT mealName, burgName, friesName, drinksName, mealPrice FROM meals';


	// get the result set (set of rows)
  $result1 = mysqli_query($conn, $sql1);
  $result2 = mysqli_query($conn, $sql2);
  $result3 = mysqli_query($conn, $sql3);
  $result4 = mysqli_query($conn, $sql4);
  $result5 = mysqli_query($conn, $sql5);


	// fetch the resulting rows as an array
	$burgers = mysqli_fetch_all($result1, MYSQLI_ASSOC);
	$chicken = mysqli_fetch_all($result2, MYSQLI_ASSOC);
	$fries = mysqli_fetch_all($result3, MYSQLI_ASSOC);
	$drinks = mysqli_fetch_all($result4, MYSQLI_ASSOC);
	$meals = mysqli_fetch_all($result5, MYSQLI_ASSOC);


  // print_r($burgers);
  // print_r($chicken);
  // print_r($fries);
  // print_r($drinks);
  // print_r($meals);


	// free the $result from memory (good practise)
	mysqli_free_result($result1);
	mysqli_free_result($result2);
	mysqli_free_result($result3);
	mysqli_free_result($result4);
	mysqli_free_result($result5);

	// close connection
	mysqli_close($conn);


?>


<!-- creating variables -->
<?php $title = 'Menu'; ?> 
<?php $currentPage = 'menu'; ?>

<!-- adding the head -->
<?php include('templates/head.php'); ?>

  <body>
  
    <?php include('templates/navigation.php')?>

    <section class="menu">
    <h3 class="menu-title">Menu</h3>
    
    <div class="menu-container">

    <div class="menu-item">
    <h4 class="menu-item_title">Burger</h4>
    <div class="burger">
    <p class="menu-items_details-title">Name</p>
    <p class="menu-items_details-title">Ingredients</p>
    <p class="menu-items_details-title">Price</p>
    </div>
    <div class="burger-data">
    <!-- getting data from array and using loop to go thought it -->
    <?php foreach($burgers as $burger){ ?>
      <p class="data-detail"><?=$burger['burgName'] ?></p>
      <p class="data-detail"><?=$burger['burgIngredients'] ?></p>
      <p class="data-detail"><?=$burger['burgPrice'] ?></p>

    <?php } ?>
    <!-- end of foreach -->
    </div>
    </div>

    <div class="menu-item">
    <h4 class="menu-item_title">Fries</h4>
    <div class="fries">
    <p class="menu-items_details-title">Size</p>
    <p class="menu-items_details-title">Price</p>
    </div>
    <div class="fries-data">
    <!-- getting data from array and using loop to go thought it -->
    <?php foreach($fries as $fry){ ?>
      <p class="data-detail"><?=$fry['friesName'] ?></p>
      <p class="data-detail"><?=$fry['friesPrice'] ?></p>

    <?php } ?>
    </div>
    </div>

    <div class="menu-item">
    <h4 class="menu-item_title">Chicken</h4>
    <div class="chicken">
    <p class="menu-items_details-title">Size</p>
    <p class="menu-items_details-title">Pieces</p>
    <p class="menu-items_details-title">Price</p>
    </div>
    <div class="chicken-data">
 <!-- getting data from array and using loop to go thought it -->
    <?php foreach($chicken as $chick){ ?>
      <p class="data-detail"><?=$chick['chickName'] ?></p>
      <p class="data-detail"><?=$chick['chickPieces'] ?></p>
      <p class="data-detail"><?=$chick['chickPrice'] ?></p>

    <?php } ?>
    </div>
    </div>

    <div class="menu-item">
    <h4 class="menu-item_title">Drinks</h4>
    <div class="drinks">
    <p class="menu-items_details-title">Name</p>
    <p class="menu-items_details-title">Price</p>
    </div>
    <div class="drinks-data">
 <!-- getting data from array and using loop to go thought it -->
    <?php foreach($drinks as $drink){ ?>
      <p class="data-detail"><?=$drink['drinksName'] ?></p>
      <p class="data-detail"><?=$drink['drinksPrice'] ?></p>

    <?php } ?>
    </div>
    </div>

    <div class="menu-item">
    <h4 class="menu-item_title">Meals</h4>
    <div class="meals">
    <p class="menu-items_details-title">Name</p>
    <p class="menu-items_details-title">Burger</p>
    <p class="menu-items_details-title">Fries</p>
    <p class="menu-items_details-title">Drinks</p>
    <p class="menu-items_details-title">Price</p>
    </div>
    <div class="meals-data">
      
 <!-- getting data from array and using loop to go thought it -->
    <?php foreach($meals as $meal){ ?>
      <p class="data-detail"><?=$meal['mealName'] ?></p>
      <p class="data-detail"><?=$meal['burgName'] ?></p>
      <p class="data-detail"><?=$meal['friesName'] ?></p>
      <p class="data-detail"><?=$meal['drinksName'] ?></p>
      <p class="data-detail"><?=$meal['mealPrice'] ?></p>

    <?php } ?>
    </div>
    </div>
    
    <!-- the link would go to a just eat page, if existed -->
   <a href="#" class="btn menu-btn">ORDER NOW</a> 
    </div>
    </section>

    <?php include('templates/footer.php') ?>
    

    <script src="./js/script.js"></script>
  </body>
</html>

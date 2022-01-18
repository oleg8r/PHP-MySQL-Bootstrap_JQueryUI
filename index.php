<html>

	<head>
		<!-- 3 references to start using Bootstrap -->
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>

	<body>
		<h1>Welcome to my Web Server</h1>
		<h3>This web server hosts the Organic Food online store.</h3><br>
		<br><br>
		<hr>
		
		<!--h2> Search products by name </h2>
		<!-- form action="/search_keyword.php">
			<label for="search">Search for a product:</label><br>
			<input type="text" id="search" name="input_keyword"><br>
			<br>
			<input type="submit" value="Enter">
		</form -->		
		
		
		
		<form class="form-horizontal" action="/search_keyword.php">
		<fieldset>

		<!-- Form Name -->
		<legend>Search for a Product</legend>

		<!-- Search input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="search">Search Input</label>
		  <div class="col-md-5">
			<input id="search" name="input_keyword" type="search" placeholder="e.g. apple" class="form-control input-md" required="">
			<p class="help-block">Enter a word to search for in the product database</p>
		  </div>
		</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="singlebutton">Click the button to search the product</label>
		  <div class="col-md-4">
			<button id="singlebutton" name="singlebutton" class="btn btn-primary">Search</button>
		  </div>
		</div>

		</fieldset>
		</form>


				
		<?php
			// Includes re-usabe codes stored in separate files
			include "db_connect.php";
			include "search_keyword.php";
			include "show_all_data.php";	
		?>
		
		
		<!-- h2> Add a new product to the database </h2>
		<form action="/add_product.php">
			<label for="product_name">Specify a product name:</label><br>
			<input type="text" id="product_name" name="input_product_name"><br>		  
		  	<br>
			<label for="product_description">Specify a product description:</label><br>
			<input type="text" id="product_description" name="input_product_description"><br>		  
		  	<br>
			<label for="product_price">Specify a product price:</label><br>
			<input type="text" id="product_price" name="input_product_price"><br>
		  	<br>
			<input type="submit" value="Add">
		</form -->
		<hr>
		
		
		<form class="form-horizontal" action="/add_product.php">
		<fieldset>

		<!-- Form Name -->
		<legend>Add a New Product</legend>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="productname">Enter the name of the new product</label>  
		  <div class="col-md-6">
		  <input id="productname" name="input_product_name" type="text" placeholder="" class="form-control input-md">
		  <span class="help-block">Enter the name of the new product here</span>  
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="productdescr">Enter the description of the new product</label>  
		  <div class="col-md-8">
		  <input id="productdescr" name="input_product_description" type="text" placeholder="" class="form-control input-md">
		  <span class="help-block">Enter the description of the new product here</span>  
		  </div>
		</div>

		<!-- Text input-->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="textinput">Enter the price of the new product</label>  
		  <div class="col-md-2">
		  <input id="textinput" name="input_product_price" type="text" placeholder="" class="form-control input-md">
		  <span class="help-block">Enter the price</span>  
		  </div>
		</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-4 control-label" for="addproduct"></label>
		  <div class="col-md-4">
			<button id="addproduct" name="addproduct" class="btn btn-primary">Add a New Product</button>
		  </div>
		</div>

		</fieldset>
		</form>

		
		
		<?php
			// Includes re-usabe codes stored in separate files	
			include "add_product.php";
			
			$connect_obj->close();
		?>
		
		
	</body>

</html>
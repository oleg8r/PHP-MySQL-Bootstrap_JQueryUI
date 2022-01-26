<head>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
	<script>
	$( function() {
		$( "#accordion" ).accordion();
	} );
	</script>
	
	
	<style>
		* {
			font-family:Arial, Helvetica, sans-serrif;
		}
	</style>
	
</head>



<?php

	// Includes a re-usabe code stored in a separate file to establish connection
	include "db_connect.php";
	
	// Gets the user input from the form
	$sql_keyword= $_GET["input_keyword"];
	
	// Addresses the issue of apostrophes
	$sql_keyword= addslashes($sql_keyword);
	
	// Displays what word is being searched for
	echo "<h1>Searching for '$sql_keyword'</h1>";
	
	// Searches the database for the specific word
	echo "<h2> Showing products with the word '$sql_keyword' in the name:</h2>";
	$sql= "SELECT Product_ID, Product_Name, Product_Descr, Product_Price FROM product_table WHERE Product_Name LIKE '%" . $sql_keyword . "%'";
	$result= $connect_obj->query($sql);
	
?>


<div id="accordion">

	<?php
	
		if ($result->num_rows > 0) {
		  // Outputs data of each row
		  while($row= $result->fetch_assoc()) {
			// Dot (".") is a concatinate symbol in PHP
			//echo "Product No: " . $row["Product_ID"]. "<br>". " - Product Name: " . $row["Product_Name"]. "<br>". " - Product Description: " . $row["Product_Descr"]. "<br>". " - Product Price: " . "$" . $row["Product_Price"]. "<br>";
		    // Implements accordion presentation for the search results
			echo "<h3>$row[Product_Name]</h3>";
			echo "<div><p>$row[Product_Descr]</p> <p>$row[Product_Price]</p></div>";
		  }
		} else {
		  echo "0 results";
		}
		
		echo "<br><hr>";
		$_GET = null;
		
	?>
	
</div>
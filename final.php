<?php
//connect to the database
$mysqli = new mysqli(	"mysql.onepotcooking.com", 	//db server
						"scps", 					//username
						"h?H#kjGj", 				//password
						"classdb");					//database

//check for any errors
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

$zipcode = $_REQUEST['zipcode'];
$testType = $_REQUEST['test_type'];

/*if (!empty($testType)) {
	$testPhrase = "test_type='{$testType}' AND "
}
else {
	$testPhrase = "";
}*/


if (!empty($zipcode)) {

	//define the query you want to run on the database
	$myQuery = "SELECT * FROM cpichardo_final WHERE {$testTypePhrase} zipcode={$zipcode}";

	//run the query
	$mysqli->real_query($myQuery);
	$res = $mysqli->use_result();

/*
	//create an empty array that will hold all the rows returned from the database query
	$allHospitals = array();
		//loop through the results returned from the database here
	//the mysql_fetch_array() function is a built-in PHP function that converts a single row from the results of a database read query into a PHP array
while($row = mysql_fetch_array($result)) {
		//put each row into a new element in the $allHospitals array
		$allHospitals[] = $row;
	}
*/

}



?>

<html>
     <head>
          <meta charset="utf-8" />
          <title>Final Project</title>
		  <link rel="stylesheet" type="text/css" href="css/final.css" />
		  
     </head>
     <body>
	<div id="container_div">
			  
			  <?php	include("_final_header.php"); ?>
		  
	
		  	  
	<div id="logo">
		<h1>TestSmart</h1>
		<p>Find a testing place and make your appointment online for free</p>
		
	</div>
		   
	<div id="first_div">
	
	<label for="getstarted">Get Started</label>
	<form action="final.php" method="POST">
			<select name="test_type">
				<option>Select Test Type</option>
				<option value="mri" id="mri">MRI</option>
				<option value="xray" id="xray">X-Ray</option>
				<option value="sonogram" id="sonogram">Sonogram</option>
				<option value="catscan" id="catscan">Cat Scan</option>
			</select>		
			<br>
			<br>
			
		<label for="zipcode">Zip Code:</label>
		<input type="text" id="zip_code" name="zipcode" />
			<br>
			<br>
		<input type="submit" value="Find testing place" />
						
	</form>
	</div>
		  
	<div class="clear"></div>
		  
	<div id="second_div">
		<h4>Are you an Indepedent Diagnostic Center or Hospital?</h4>
		 <p>TestSmart is the best way to streamline the scheduling process and attract new patients to your business</p>
		 <p><a href="learn_more.php">Learn More</a></p>
	</div>

	<div class="clear"></div>

<?php if (!empty($zipcode)) : ?>
	<div id="result">
		<?php while ($row = $res->fetch_assoc() ) : ?>
		<h3>Name: <?php echo $row['name']; ?> <p>Adress: <?php echo $row['street']; ?>        <?php echo $row['city']; ?> <?php echo $row['state']; ?><?php echo $row['zipcode']; ?></p></h3>
		<?php endwhile; ?>
	</div>
<?php endif; ?>		

		  <?php
			include("_final_footer.php");
		  ?>
		  
	</div>
		  
    </body>
</html>
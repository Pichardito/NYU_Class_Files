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

//get the data from the POST request
$zipcode = addslashes($_POST['zipcode']);
$mri = ($_POST['mri']);
$xray = ($_POST['xray']);
$sonogram = ($_POST['sonogram']);
$catscan = ($_POST['catscan']);




header("Location: final.php");

?>
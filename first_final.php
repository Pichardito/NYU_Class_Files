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

//echo $mysqli->host_info . "\n";

//do a query on the database
//$mysqli->real_query("SELECT * FROM cpichardo_final_contact ORDER BY created DESC");
//$res = $mysqli->use_result();

?>


<html>

     <head>
          
          <title>Contact Us</title>
		  <link rel="stylesheet" type="text/css" href="css/final.css" />
     </head>
     <body>
          <div id="contact_container_div">
		  
		  <h1>Contact Us</h1>
		<div>
			<form action="process_contact.php" method="POST">
				  <label>Name:</label>
				  <br>
				  <input type="text" id="name" name="name" />
				  <br>
				  <br>
			  
				  <label>E-Mail:</label>
				  <br>
				  <input type="text" id="email" name="email" />
				  <br>
				  <br>
			  
				  <label>Phone:</label>
				  <br>
				  <input type="text" id="phone" name="phone"  />
				  <br>
				  <br>
				  
				  <label>Subject</label>
				  <br>
				  <input type="text" id="subject" name="subject" />
				  <br>
				  <br>
				  
				  <label>Message:</label>
				  <br>
				  <textarea type="text" id="message" name="message">
				  </textarea>
				  <br>
				  <br>
				  
				  <input type="submit" value="Submit" />
		  
			</form>
		  
		 </div>
		  
		  </div>
		  
    </body>
</html>
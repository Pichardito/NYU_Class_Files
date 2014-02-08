
<html>

     <head>
          
          <title>Contact Us</title>
		  <link rel="stylesheet" type="text/css" href="css/final.css" />
     </head>
     <body>
          <div id="contact_container_div">
		  
		  <?php
			include("_final_header.php");
		  ?>
		  
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
		  
		  <?php
			include("_final_footer.php");
		  ?>
		  
    </body>
</html>
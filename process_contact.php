

<?php

$to = "ctpichardo@gmail.com"; 

$name = $_POST['name']; 
$email = $_POST['email']; 
$subject = $_POST['subject']; 
$message = $_POST['message'];


$phpVersion = phpversion(); 

$headers = <<<END
From: {$name} <{$email}>
Reply-To: {$email}
X-Mailer: PHP/{$phpVersion}
END;


mail($to, $subject, $message, $headers);


header("Location: thank_you.php?to={$to}");

?>
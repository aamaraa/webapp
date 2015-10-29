<?php

if(isset($_REQUEST['contactformid']) && $_REQUEST['contactformid'] == 1){
	
	$youremail = "Email Address Here"; // Enter your email here!!

	$usersname = $_POST["usersname"];
	$usersemail = $_POST["usersemail"];
	$usersphonenumber = $_POST["usersphonenumber"];
	$usersmessage = $_POST["usersmessage"];
	$subject = 'Message From Your Contact Form';
	$message = '<p>$usersname has contacted you from your site.</p>
				<h3>Their Message is as follows:</h3>
				<p>$usersmessage</p>
				<h5>Contact details</h5>
				<p>Phone Number: $usersphonenumber</p>
				<p>Email Address: $usersemail</p>'; 
			
	$headers = 'From:' . $usersemail . "\r\n";
	mail($youremail, $subject, $message, $headers);
	
	echo '<p>Thank you for your email, a member of our staff will contact you soon regarding your email!</p>';

} else {
	echo '<p>Form could not be sent, please try again!</p>';
}
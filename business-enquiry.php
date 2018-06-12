<?php	
	include 'header.php';
	include 'upload.php';
?>

	<section id="enquiry" class="section">
		<div id="offset-header"></div>			
			<div class="hero">

<?php

	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'PHPMailer/src/PHPMailer.php';
	require 'PHPMailer/src/Exception.php';

	if (isset($_POST['submit'])) {
		
		$name = $_POST['name'];
		$mail_from = $_POST['email'];
		$phone_number = $_POST['phone'];
		$location = $_POST['location'];
		$message = $_POST['message'];
		$to = "leslie@anleeconsulting.co.uk";
		$contact_info = "\n\nPhone number: ". $phone_number . ".\nLocation: ". $location;
		$text_body = "You have received an new business enquiry from " . $name . ".\n\n" . $message . $contact_info;
		$subject = "New Business Enquiry";
		
		$email = new PHPMailer();
		$email->AddAddress($to, 'Anlee Consulting Website');
		$email->setFrom('enquiries@anleeconsulting.co.uk', $name);
		$email->Subject = $subject;
		$email->Body = $text_body;
		$email->SMTPDebug = 2;

		if(!empty($_FILES['myfile']['tmp_name'])){			
			$upload = $_FILES['myfile'];
			if ($email->AddAttachment(handleUpload($upload, $name))){
				try {
					$email->send();
					echo "Your message and attachment have been sent!";
				}	catch (Throwable $t) {
					echo $t->getMessage(), "\n";
				}
			}
		} else {
			try {
				$email->send();
				echo "Your message has been sent!";
			} catch (Throwable $t) {
				echo $t->getMessage(), "\n";
			}
		}
	}
?>
			<br><br>
			<button>
				<a class="nav nav-link" href="index.php">Go back</a>
			</button>
			<br><br>
		</div> <!-- end of Hero div -->
	</section> <!-- end of Enquiry Section -->

<?php
	include 'footer.php';  
?>
<?php
	if (isset($_POST['submit'])) {
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$subject = $_POST['subject'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		echo "First Name - $fname <br>
		Last Name - $lname <br>
		Email - $email <br>
		Subject - $subject <br>
		Message - $message <br>";
	} 
?>
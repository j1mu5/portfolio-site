<?php

$fullName = $email = $message = '';
$success = false;

function IsInjected($str)
{
	$injections = array(
		'(\n+)',
		'(\r+)',
		'(\t+)',
		'(%0A+)',
		'(%0D+)',
		'(%08+)',
		'(%09+)'
	);

	$inject = join('|', $injections);
	$inject = "/$inject/i";

	if (preg_match($inject, $str)) {
		return true;
	} else {
		return false;
	}
}


$errors = array(
	'fullName' => '',
	'email' => '',
	'message' => ''
);


if (isset($_POST['submit']) && empty($_POST['phoneNumber'])) {
	//    function_alert('Submit Pressed');

	// Name Validation
	if (empty($_POST['fullName'])) {
		$errors['fullName'] = 'Your full name is required <br/>';
	} else {
		$title = $_POST['fullName'];
		// Using Regex for this
		if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
			$errors['fullName'] = 'Title must be letters and spaces only <br />';
		}
	}

	// Email Validation
	if (empty($_POST['email'])) {
		$errors['email'] = 'An email is required <br/>';
	} else {
		$email = $_POST['email'];
		// Checks email is valid using built in PHP filter
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors['email'] = 'Email, must be a valid email address <br/>';
		}

		if (IsInjected($email)) {
			$errors['email'] = "Bad email value!";
			exit;
		}
	}

	// Message Validation
	if (empty($_POST['message'])) {
		$errors['message'] = 'A message is required <br/>';
	} else {
		$title = $_POST['message'];
	}

	if (!array_filter($errors)) {
		// echo 'There are errors in the form';

		$fullName = htmlspecialchars($_POST['fullName']);
		$email = htmlspecialchars($_POST['email']);
		$message = htmlspecialchars($_POST['message']);


		// Create email body
		$email_from = "james@jdjc.space";
		$email_subject = "New contact form submission";
		$email_body = "You have received a new message from $fullName @ $email\n" .
			"Here is your message: \n $message";

		// Send email
		$to = "info@jdjc.space";
		$headers = "From: james@jdjc.space \r\n";
		$headers .= "Reply-To: $email \r\n";
		mail($to, $email_subject, $email_body, $headers);

		$success = true;
		$fullName = $email = $message = '';
	}
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php include('header.php'); ?>
<?php include('navbar.php'); ?>
<?php include('home.php'); ?>
<?php include('projects.php'); ?>
<?php include('about.php'); ?>
<?php include('contact.php'); ?>
<?php include('footer.php'); ?>

</html>
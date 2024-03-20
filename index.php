<?php

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Document</title>

	<link rel="stylesheet" href="styles.css" />
	<script src="script.js" defer></script>
</head>

<body>
	<main>
		<?php

		if (
			isset($_SESSION["companyName"]) &&
			isset($_SESSION["fullname"]) &&
			isset($_SESSION["email"]) &&
			isset($_SESSION["phone"]) &&
			isset($_SESSION["serviceChoice"])
		) :

		?>
			<div id="form-success">
				<h1>Form Submitted Successfully</h1>
				<p>Thank you for submitting the form. We will get back to you shortly.</p>

				<div id="form-success-details">
					<p><strong>Company Name:</strong> <?php echo $_SESSION["companyName"]; ?></p>
					<p><strong>Fullname:</strong> <?php echo $_SESSION["fullname"]; ?></p>
					<p><strong>Email:</strong> <?php echo $_SESSION["email"]; ?></p>
					<p><strong>Phone:</strong> <?php echo $_SESSION["phone"]; ?></p>
					<p><strong>Service Choice:</strong> <?php echo $_SESSION["serviceChoice"]; ?></p>
				</div>
			</div>

		<?php else : ?>


			<form action="submit_form.php" method="POST">
				<h1>Fill the form</h1>
				<p>Complete the form to get instant access.</p>

				<div id="form-inputs">
					<input type="text" name="companyName" id="form-company-name" placeholder="Company Name" required />
					<input type="text" name="fullname" id="form-fullname" placeholder="Fullname" required />
					<input type="email" name="email" id="form-email" placeholder="Email" required />
					<input type="tel" name="phone" id="form-phone" placeholder="Phone" required />

					<select name="service-choice" id="form-service-choice" required>
						<option value="default">Choose a service...</option>
						<option value="Free">Free and Slow</option>
						<option value="Premium">Premium and Fast</option>
					</select>

					<button id="submitButton" type="submit" disabled>Send Request</button>
				</div>
			</form>

		<?php endif; ?>

		<img src="mobile_delivery_track.png" alt="image of a delivery track" />
	</main>
</body>

</html>
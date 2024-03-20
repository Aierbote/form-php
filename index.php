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
		<form action="submit_form.php">
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

		<img src="mobile_delivery_track.png" alt="image of a delivery track" />
	</main>
</body>

</html>
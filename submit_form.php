<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $companyName = $_POST["companyName"];
  $fullname = $_POST["fullname"];
  $email = $_POST["email"];
  $phone = $_POST["phone"];
  $serviceChoice = $_POST["service-choice"];

  // Validate form inputs
  $errors = [];

  if (empty(trim($companyName))) {
    $errors[] = "Company Name is required";
  }

  if (empty(trim($fullname))) {
    $errors[] = "Fullname is required";
  }

  if (empty(trim($email))) {
    $errors[] = "Email is required";
  } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format";
  }

  if (empty(trim($phone))) {
    $errors[] = "Phone is required";
  } elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
    $errors[] = "Invalid phone number format";
  }

  if ($serviceChoice == "default") {
    $errors[] = "Please choose a service";
  }

  // If there are no errors, process the form data
  if (empty($errors)) {
    // Process the form data here
    // ...
    echo "Form submitted successfully";
  } else {
    // Display the errors
    foreach ($errors as $error) {
      echo "<p>$error</p>";
    }
  }
}

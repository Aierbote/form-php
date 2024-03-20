<?php

if (session_status() == PHP_SESSION_NONE) {
  session_start();
}

unset($_SESSION["companyName"]);
unset($_SESSION["fullname"]);
unset($_SESSION["email"]);
unset($_SESSION["phone"]);
unset($_SESSION["serviceChoice"]);

header("Location: index.php");

<?php

require_once "db.php";
if (!empty($_POST)) {
	foreach ($_POST as $key => $value) {
		$_POST[$key] = mysqli_real_escape_string($db, $value);
	};

	extract($_POST);

	// $name = mysqli_real_escape_string($db, $_POST['name']);

	// $email = mysqli_real_escape_string($db, $_POST['email']);

	// $phone = mysqli_real_escape_string($db, $_POST['phone']);

	$insert = "INSERT INTO `users` (`name`, `email`, `phone`) VALUES ('$name', '$email', '$phone')";

	$query = mysqli_query($db, $insert);

	if ($query) header('location: ../index.php');
	else echo "ERROR";
}

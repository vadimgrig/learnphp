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

	$id = (int) $id;

	$update = "UPDATE `users` SET  `name`= '$name', `email` = '$email', `phone` = '$phone' WHERE `id` = '$id'";

	$query = mysqli_query($db, $update);

	if ($query) header('location: ../index.php');
	else echo "ERROR";
}

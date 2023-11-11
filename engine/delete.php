<?php
require_once 'db.php';


if (!empty($_GET['id_member'])) {
	$id = (int) $_GET['id_member'];

	$delete = "DELETE FROM users WHERE id = $id";

	$query = mysqli_query($db, $delete);

	if ($query) header('location: ../index.php');
	else echo "ERROR DEL";
}

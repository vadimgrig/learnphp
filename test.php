<?php
session_start();

if (!isset($_SESSION['access'])) die("You can't enter");

echo "Страница админки";


?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>

	<!-- <?php
				// // echo $_SESSION['Name'];

				// var_dump($_SESSION["Setting"]);



				?> -->
</body>

</html>
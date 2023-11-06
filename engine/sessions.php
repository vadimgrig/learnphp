<?php
// $_SESSION





// $_SESSION['Settings' . '<br>'] = ['id' => "1" . '<br>', 'name' => "2" . '<br>', 'visits' => "true" . '<br>'];

// echo serialize($_SESSION);

// var_dump($_SESSION) . '<br>';

// $_SESSION['Name'] = "Vadym";

// $_SESSION['Setting'] = ["test" => 1, 37, true];

// session_unset(); завершает сессию
// session_destoy(); разрушает сесию(очиащет удаляет


// var_dump($_SESSION);

//  unset(mixed $var, mixed ...$vars): void; функция которая удаляет переменные, или группу переменных

session_start();

define("ADMINPASS", "vadimadmin");

$errors = "";

if (!empty($_POST['password_access'])) {
	if ($_POST['password_access'] == ADMINPASS) {
		$_SESSION['access'] = true;
		setcookie('access', 'admin', time() + 3600 * 3, "/");
		$_SESSION['errors'] = "You are welcome to";
	} else {
		$_SESSION['errors'] = "FuckOff men";
	}
};

if (!empty($_COOKIE['access']))

	if (isset($_GET['logout']) && $_GET['logout'] == 1) {
		session_unset();
	}



if (!empty($_SESSION['errors'])) {
	echo $_SESSION['errors'];
} elseif (isset($_SESSION['access'])) {
	echo $_SESSION['errors'];
} else {

?>

	<form action="" method="POST">
		<!-- <input type="name" name="login"> -->
		<input type="password" name="password_access" placeholder="Enter the password">
		<button name="login">login</button>
	</form>


<?php };


?>
<br>
<a href="index.php?logout=1">Logout</a>
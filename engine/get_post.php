<?php

// echo $_SERVER['REQUEST_METHOD'];

// $contact_sub = $_POST['contact_form'] ?? '';
// $search_sub = $_POST['search_form'] ?? '';

// if ($contact_sub == "contact_submited") {
// 	echo "Були відправлені данні";
// };

// if ($search_sub == "search_submited") {
// 	echo "Шукаю";
// };

?>
<!-- 
<form action="" method="POST">
	<input type="text" name="name">
	<input type="text" name="lastname">
	<input type="text" name="email">
	<input type="checkbox" value="on" name="check">
	<select name="number[]" multiple="">
		<option value="1">Значення 1</option>
		<option value="2">Значення 2</option>
		<option value="3">Значення 3</option>
	</select>
	<button name="contact_form" value="contact_submited">SendContact</button>
</form>

<form action="" method="POST">
	<input type="text" name="search">
	<button name="search_form" value="search_submited">Search</button>
</form> -->

<?php
$success = false;
// $errors = false;

$contact_sub = $_POST['submit_form'] ?? '';

if ($contact_sub == "submited") {
	$name = strip_tags(trim($_POST['name']));
	$phone = strip_tags(trim($_POST['phone']));
	$text = strip_tags(trim($_POST['text']));
	$yes = $_POST['check'] ?? '';

	$body = $name . "\n" . $phone . "\n" . $text . "\n" . $yes;

	if ($name == "" || $phone == "" || $text == "") {
		$errors = "Заполните неодходжимые поля";
	} else if (mb_strlen($name . "utf-8") > 20) {
		$errors = "Имя слишком такое длинное";
	} else if (mb_strlen($text . "utf-8") < 50) {
		$errors = "Не меньше 50 символов";
	} else {
		mail('vgstol@gmail.com', 'Contact Messeges', $body);
		$success = true;
	};
};
?>

<h1 id="header_form">Новая форма</h1>
<style>
	h1 {
		color: red;
	}

	form {
		margin-left: 50px;
	}

	label {
		width: 200px;
		display: block;
	}
</style>

<?php if ($success) {
	echo "Форма упешно отправлена";
} else {
	if (isset($errors)) echo $errors;
?>

	<form action="" method="post">
		<p>
			<label for="name">Name</label><input type="text" id="name" name="name" value="<?php if (isset($name)) echo $name ?>">
		</p>
		<p>
			<label for="phone">Lastname</label><input type="text" name="phone" id="phone" value="<?php if (isset($phone)) echo $phone ?>">
		</p>
		<p>
			<textarea name="text"><?php if (isset($text)) echo $text ?></textarea>
		</p>
		<p>
			<label for="check">Yes or Not:</label><input type="checkbox" id="on" name="check" <?php if (isset($yes) && $yes == "on") echo "checked" ?>>
		</p>
		<button name="submit_form" value="submited">Submit</button>
	</form>

<?php } ?>
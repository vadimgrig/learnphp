<?php

require_once 'db.php';
// $name = mysqli_real_escape_string($db, "Vadym'ssssss");

// $insert = "INSERT INTO `users` (`name`, `email`, `country_code`, `phone`, `Descr`) VALUES ('$name', 'vgstol@gmail.com', '380', '960691699', 'Я хороший програмист на PHP и JS')";

// $update = "UPDATE `users` SET  `Descr`= 'Hello' WHERE `id` = 1";

// $delete = "DELETE FROM `users` WHERE `id` = 3";

$select  = "SELECT `id`, `name`, `email`, `phone` FROM `users`";

$query = mysqli_query($db, $select);
$users = mysqli_fetch_all($query, MYSQLI_ASSOC);


if ($query) { ?>
	<h2>Наша команда</h2>

	<table style="text-align: center;">
		<thead style="background: #f0f0f0;">
			<td>ID</td>
			<td>NAME</td>
			<td>EMAIL</td>
			<td>PHONE</td>
			<td>DELETE</td>
			<td>UPDATE</td>
		</thead>
		<?php
		foreach ($users as $member) { ?>
			<tr>
				<td><?php echo $member['id']; ?></td>
				<td><?php echo $member['name']; ?></td>
				<td><?php echo $member['email']; ?></td>
				<td><?php echo $member['phone']; ?></td>
				<td><a href="/engine/delete.php?id_member=<?php echo $member['id']; ?>">Delete</a></td>
				<td><a href="index.php?update_member=<?php echo $member['id']; ?>">Edit</a></td>
			</tr>
		<?php }; ?>
	</table>
<?php
}
if (!empty($_GET['update_member'])) { ?>
	<h2>Редактирование</h2>
	<form action="engine/update.php" method="POST">
		<?php
		foreach ($users as $member) {
			if ($member['id'] == $_GET['update_member']) { ?>
				<input type="text" name="name" value="<?php echo $member['name']	?>"><br>
				<input type="text" name="email" value="<?php echo $member['email']	?>"><br>
				<input type="number" name="phone" value="<?php echo $member['phone']	?>"><br>
		<?php }
		}
		?>
		<input type="hidden" name="id" value="<?php echo $_GET['update_member'] ?>">
		<button type="submit">Кнопочка</button>

	</form>
<?php } else {

?>
	<h2>Добавить пользователя</h2>
	<form action="engine/add.php" method="POST">
		<input type="text" name="name" placeholder="Введите имя"><br>
		<input type="email" name="email" placeholder="Введите email"><br>
		<input type="number" name="phone" placeholder="Введите номер телефона"><br>
		<button type="submit">Кнопочка</button>
	</form>
<?php
}
?>








<!-- // if ($query) echo 'Все отлично!' . "<br>"; -->
<!-- // else echo 'Все плохо , в базу не добавлено' . "<br>"; -->


<!-- // echo mysqli_error($db) . "<br>"; -->

<!-- // var_dump($db); -->
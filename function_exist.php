	//ПРоверка существующей функии в коде, что бы избежать повторения функции
	<?php if (!function_exists('sum')) {
		function sum()
		{
			echo 'hello';
		}
	};


	?>
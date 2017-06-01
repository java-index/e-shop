<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php

	date_default_timezone_set('Europe/Kiev');

	if ( isset($_POST['name']) && !empty($_POST['name'] )) {
		$name = $_POST['name'];
		setcookie('name', $name, time() + 3600);
	} elseif( isset($_COOKIE['name']) ) {
		$name = $_COOKIE['name'];
	} else {
		$name = 'гость';
	}

	if ( isset($_COOKIE['last_visit']) ){
		$last_visit = date ('d-m-Y H:i:s', $_COOKIE['last_visit'] );
		$interval = ( time() - $_COOKIE['last_visit'] );
		$count_visit = intval( $_COOKIE['count_visit'] );
	} else {
		$last_visit = 'неизвестно';
		$count_visit = 0;
	}

	setcookie('last_visit', time() );
	setcookie('count_visit', $count_visit+1);

	?>
	<h1>Привет <?php echo $name ?></h1>

	<p>Last visit  at: <?php echo $last_visit ?></p>
	<p>Прошло <?php echo $interval ?> сек</p>
	<p>Вы посещали эту страницу <?php echo $count_visit ?> раз</p>
	<br>
	<a href="test.php">test.php</a>

	<form action="index.php" method="post" enctype="multipart/form-data">
		Введите имя : <input type="text" name="name" id="name">
		<input type="reset" name="reset" value = "Очисить">
		<input type="submit" name="submit" value = "Submit">
	</form>

<img src="http://savepic.ru/13134592.jpg" border="0" alt="Изображение - savepic.ru — сервис хранения изображений" />

</body>
</html>

<?php 
	session_start();
	$answer1 = $_POST['answer1'];
	$_SESSION['answer1'] = $answer1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<p>Вопрос 2:</p>
<p>3 + 3 = ?</p>

<form action="task3.php" method="post">
	<input type="text" name="answer2" >
	<input type="submit" name="Отправить">
</form>
	
</body>
</html>


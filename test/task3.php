<?php 
	session_start();
	$answer2 = $_POST['answer2'];
	$_SESSION['answer2'] = $answer2;

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<p>Вопрос 3:</p>
<p>4 + 4 = ?</p>

<form action="result.php" method="post">
	<input type="text" name="answer3" >
	<input type="submit" name="Отправить">
</form>
	
</body>
</html>

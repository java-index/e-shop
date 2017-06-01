<?php 
	session_start();
	$answer1 = $_SESSION['answer1'];
	$answer2 = $_SESSION['answer2'];
	$answer3 = $_POST['answer3'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Result</title>
</head>
<body>
	<p>Ваш результат:</p>
<?php 
	echo $answer1 . "<br>";
	echo $answer2 . "<br>";
	echo $answer3 . "<br>";	
	echo session_id();
?>

</body>
</html>

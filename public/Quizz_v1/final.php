<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Quizzer</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css" />
</head>
<body>
	<header>
		<div class="container">
			<h1>PHP Quizzer</h1>
		</div>
	</header>
	<main>
		<div class="container">
			<h2>You're Done</h2>
			<p>Congrats! You have completed the test</p>
			<p>Final Score: <?php echo $_SESSION['score']; ?></p>
			<a href="question.php?n=1" class="start" > Take Again </a>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2018, PHP Quiz 
		</div>
	</footer>
</body>
</html>
<?php

	if(isset($_SESSION['score'])){
		// remove all session variables
		session_unset();

		// destroy the session
		session_destroy();
	}

?>

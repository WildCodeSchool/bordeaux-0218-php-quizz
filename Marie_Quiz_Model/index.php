<?php include 'database.php'; ?>
<?php
{# Get total Question #}

$query = "SELECT * FROM questions";

{#  Get results #}
$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
$total = $results->num_rows;

?>
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
			<h2>Test Your PHP knowledge</h2>
			<p>This is a mulitple choice quiz to text your knowledge of PHP</p>
			<ul>

				<li><strong>Number of Question: </strong><?php echo $total; ?></li>
				<li><strong>Type: </strong>Multiple Choice</li>
				<li><strong>Estimated Time: </strong><?php echo $total * .5; ?> Minutes</li>
				<!-- make sure that the user is taken to question number 1 -->
				<a href="question.php?n=1" class="start">Start Quiz</a>

			</ul>
		</div>
	</main>
	<footer>
		<div class="container">
			Copyright &copy; 2018, PHP Quiz
		</div>
	</footer>
</body>
</html>

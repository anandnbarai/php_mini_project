<!DOCTYPE html>
<html>

<head>
	<title>Calculator</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		body {
			background-color: lightseagreen;
		}

		input,
		select {
			border-radius: 5px;
			border: 1px solid #ccc;
		}
	</style>
</head>

<body>
	<center>
		<br> <br>

		<h2> Simple Canculator Using PHP</h2>
		<br>
		<form method="post">
			<b>Enter First Number :</b>
			<input type="float" name="num1"><br>
			<br>
			<b>Enter Second Number :</b>
			<input type="float" name="num2"><br><br>
			<b>Select an operation:</b>
			<select name="operator">
				<option value="add">Addition</option>
				<option value="subtract">Subtraction</option>
				<option value="multiply">Multiplication</option>
				<option value="divide">Division</option>
			</select><br><br>
			<input type="submit" name="submit" value="Calculate">
		</form>

		<?php
		if (isset($_POST["submit"])) {
			$num1 = $_POST['num1'];
			$num2 = $_POST['num2'];
			$operator = $_POST['operator'];

			switch ($operator) {
				case 'add':
					$result = $num1 + $num2;
					break;
				case 'subtract':
					$result = $num1 - $num2;
					break;
				case 'multiply':
					$result = $num1 * $num2;
					break;
				case 'divide':
					if ($num2 == 0) {
						echo "Cannot divided by zero";
					} else {
						$result = $num1 / $num2;
					}
					break;
			}


			echo "<br><b> Result is: " . $result . "</b>";
		}
		?>
	</center>
</body>

</html>
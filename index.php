<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/7470bacc54.js"></script>
    <link rel="stylesheet" href="css/homepage.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans+Condensed:300|Oswald|Roboto&display=swap" rel="stylesheet">
    <title>Home | Iproject</title>
</head>
<body>

	<form method="GET" action="#">
		<input type="text" name="num1" placeholder="Number 1">
		<input type="text" name="num2" placeholder="Number 2">
		<select name="operator">
			<option>None</option>
			<option>Add</option>
			<option>Subtract</option>
			<option>Multiply</option>
			<option>Divide</option>
		</select>
		<br>
		<button name="submit"  value="submit">Calculate</button>
	</form>

	<p>The answer is:

	<?php
		#getting the required information to perfrom the arithmetics

		if (isset($_GET['submit'])) {#when the submit button is clicked
			$result1 = $_GET['num1'];	#get the data in number 1
			$result2 = $_GET['num2'];	#get the data in number 2
            $operator = $_GET['operator'];  #get the operator type
            
			#the logic here is to use the switch statement to do arithmetics base on the type of operator the user selects
			switch ($operator) {
				case 'None':
					echo "You need to select a method";
					break;
				case 'Add':
					echo $result1 + $result2;
					break;
				case 'Subtract':
					echo $result1 - $result2;
					break;
				case 'Multiply':
					echo $result1 * $result2;
					break;
				case 'Divide':
					echo $result1 / $result2;
					break;
			}	
		}

    ?>
    
    </p>

</body>
</html>
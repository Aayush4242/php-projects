<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="calculator.css">
</head>
<body>
	<header>
		<div class="mainheader">
			<div class="header1">
				<div class="header2">
					<h1> php <br> Calculator</h1>
				</div>
				<div class="form1">
					<form method="POST">
						<div class="inp1">
						<input type="text" name="num1" class="inp1" placeholder="Enter number">
						</div><br>
						<div class="inp2">
						<input type="text" name="num2" class="inp2" placeholder="Enter number">
						</div><br>

						<div class="selectstyle">
							<select name="operation" >
								<option value="add">ADD</option>
								<option value="sub">SUBTRACT</option>
								<option value="mul">MULTIPLY</option>
								<option value="divi">DIVIDE</option>
								<option value="mode">MODE</option>
							</select>
						</div><br>

						<div class="inp3">
						<input type="submit" name="submit" class="inp3">
						</div>
						<br>
					</form>
				<!-- </div> -->

						<div class="inp4">
						<p>
							<?php

								if(isset($_POST['submit']))
								{
									$num1 = $_POST['num1'];
									$num2 = $_POST['num2'];
									// echo "{$num1} {$num2}";

									$operation = $_POST['operation'];

									switch ($operation) {
										case 'add': $sum = $num1 + $num2;
											echo "The addition of numbers is : {$sum}";
											break;
										case 'sub': $sub = $num1 - $num2;
											echo "The subtraction of numbers is : {$sub}";
											break;
										case 'mul': $mul = $num1 * $num2;
											echo "The multiplication of numbers is : {$mul}";
											break;
										case 'divi': $divi = $num1 / $num2;
											echo "The division of numbers is : {$divi}";
											break;
										case 'mode': $mode = $num1 % $num2;
											echo "The mode of numbers is : {$mode}";
											break;
										
										default:
											echo "sorry operation does not exist...try again !!";
											break;
									}
								}
							?>
						</p>
						</div>
					<!-- </form> -->
				</div>
			</div>
		</div>

	</header>

</body>
</html>


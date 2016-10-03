<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title>Calculator Application</title>

  <!-- <link rel="stylesheet" href="style.css"/> -->
</head>

<body>
	<h1>Calculator</h1>

	<p>Type an expression in this input box to calculate.</p>
	<p>Restrictions: Only real numbers and the operators +, -, *, / are permitted.</p>  

	<form action="calculator.php" method="GET">
		<inPut TYPE="text" NAME="expression" SIZE=20>
		<INpUt TYPE="submit" VALUE="Evaluate">
	</form>



	<?php
		$equ = $_GET["expression"];
		// strip whitespace
		$equ = preg_replace('/\s+/', '', $equ);
		
		if ($equ !== '') {
	?>

		<p>Input: 
			<?php echo $equ; ?>	
		</p>

		<h2>Result:</h2>
		<p>
			<?php 
				// TODO: error check (invalid chars, div by zero)
				// TODO: evaluate
				echo $equ; 
			?>		
		</p>

	<?php } ?>
</body>

</html>
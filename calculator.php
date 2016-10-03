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
	<p>Restrictions: Only real numbers and the operators +,-,*,/ are permitted.</p>  

	<form action="calculator.php" method="GET">
		<input TYPE="text" NAME="expression" VALUE="" SIZE=20>
		<input TYPE="submit" VALUE="Evaluate">
	</form>


</body>

</html>
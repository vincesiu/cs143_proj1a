<!DOCTYPE HTML>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <title>Calculator Application</title>
  

  <!-- basic styling -->
  <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
  <style type="text/css">
  	* {
  		font-family: 'Roboto', sans-serif;
  	}
  	body {
	    max-width: 90%;
	    width: 600px;
	    margin: 5% auto auto auto;
	}
	.inline {
		display: inline;
	}
	div {
		margin: 1em 0 1em 0;
	}
  </style>
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

		<div>
			<h3 class="inline">Input:</h3>
			<p class="inline"">
				<?php 
					echo $equ; 
				?>		
			</p>
		</div>

		<div>
			<h3 class="inline">Result:</h3>
			<p class="inline">
				<?php 

                    $ret="DefaultValue";

                    if (preg_match('/[^0-9.*\/+\-\s]/', $equ)) {
                        //catches invalid characters
                        //list of valid characters:
                        //  1. 0-9
                        //  2. .
                        //  3. +-
                        //  4. /*
                        //  5. whitespace
                        $ret="Invalid Expression!";

                    } elseif (preg_match('/\/\s*0/', $equ)) {
                        //division by zero
                        $ret = "Division by zero error!";

                    } elseif (preg_match('/\*\*/', $equ)) {
                        //catching an exponentiation operator
                        $ret = "Invalid Expression!";

                    } else {
                        $ret = eval("return $equ;");
                        if ($ret === FALSE) {
                            //catches if the mathematical expression
                            //is improperly formed, eg. 1++1
                            $ret = "Invalid Expression!";
                        } else {
					        $ret = $equ . " = " . $ret; 
                        }
                    }
					echo $ret;
				?>		
			</p>
		</div>

	<?php } ?>
</body>

</html>

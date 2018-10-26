<html>
	<head>
		<title>Calculator On-Line - final operation</title>
	</head>

	<body>
		<?php
		// Dichiaro le variabili
		$texta = (int)$_POST["txta"];
		$textb = (int)$_POST["txtb"];
		$operator = (string)$_POST["operator"];

		// Mostro il contenuto delle variabili
		echo "<h1>Hai inserito: " . $texta . " e " . $textb . ".</h1>";

		// Controllo e faccio l'operazione
		if ($operator == "+") {
			echo "<h1>Il risultato è: " . ($texta + $textb) . "</h1>";
		}elseif ($operator == "-") {
			echo "<h1>Il risultato è: " . ($texta - $textb) . "</h1>";
		}elseif ($operator == "*") {
			echo "<h1>Il risultato è: " . ($texta * $textb) . "</h1>";
		}elseif ($operator == "/") {
			echo "<h1>Il risultato è: " . ($texta / $textb) . "</h1>";
		}
		
		?>
	</body>	
</html>
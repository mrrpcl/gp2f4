<html>
<head>
	<title>EXECUCIÓ DEL CÀLCUL ADREÇA DE SUBXARXA</title>
</head>
	<body>
		<p><u>RESULTAT DEL CÀLCUL ADREÇA DE SUBXARXA INTRODUITS AL FORMULARI</u></p>		
		<?php
			#Obtenció del primer operand
			if ($_GET["op1"] =="") {
				$operand1 = 0;
			}
			else{
				$operand1 = $_GET["op1"];
			}
			#
			#Obtenció del segon operand
			if ($_GET["op2"] =="") {
				$operand2 = 0;
			}
			else{
				$operand2 = $_GET["op2"];
			}
			#
			#Obtencio del resultat i mostrant el resultat
			$resultat = $operand1 + $operand2;
			require_once(__DIR__ . '/vendor/autoload.php');
			echo "<p>El resultat de $operand1 + $operand2 és igual a $resultat</p>";			
		?>
		<a href="ip.html">Torna a la pàgina anterior</a>
	</body>
</html>

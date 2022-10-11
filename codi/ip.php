<html>
<head>
	<title>EXECUCIÓ DEL CÀLCUL ADREÇA DE SUBXARXA</title>
</head>
	<body>
		<p><u>RESULTAT DEL CÀLCUL ADREÇA DE SUBXARXA INTRODUITS AL FORMULARI</u></p>		
		<?php
			require_once(__DIR__ . '/vendor/autoload.php');
			
			#Obtenció del primer operand
			if ($_GET["op1"] =="") {
				$operand1 = 0;
			}else{
				$operand1 = $_GET["op1"];
			}
			
			#Obtenció del segon operand
			if ($_GET["op2"] =="") {
				$operand2 = 0;
			}else{
				$operand2 = $_GET["op2"];
			}
			
			$sub = new IPv4\SubnetCalculator($operand1, $operand2);
			$network              = $sub->getNetworkPortion();
			$broadcastAddress     = $sub->getBroadcastAddress();
			$addressableHostRange = $sub->getAddressableHostRange();

			#Obtencio del resultat i mostrant el resultat
			echo "<p>La IP de l'equip es: $operand1/$operand2</p>";
			
			echo "<p>La IP de subxarxa es: $network/$operand2</p>";

			echo "<p>La IP de broadcast es: $broadcastAddress</p>";

			echo "<p>Les adreces de host: Des de $addressableHostRange[0] a $addressableHostRange[1]</p>";
		
		
		?>
		<a href="ip.html">Torna a la pàgina anterior</a>
	</body>
</html>

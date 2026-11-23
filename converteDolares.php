<?php

$dolares = $_POST['dolares'];

// câmbio
define("TAXA_CAMBIO", 5.50);

// conversão
$reais = $dolares * TAXA_CAMBIO;
?>
<!doctype html>
<html lang="pt-BR">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Resultado da Conversão</title>
		<link rel="stylesheet" href="style.css" />
	</head>
	<body>
		<main class="card">
			<h1>Resultado da Conversão</h1>
			<p>Valor em dólares: US$ <?php echo number_format($dolares, 2, ',', '.'); ?></p>
			<p>Taxa de câmbio: R$ <?php echo number_format(TAXA_CAMBIO, 2, ',', '.'); ?></p>
			<p><strong>Valor em reais: R$ <?php echo number_format($reais, 2, ',', '.'); ?></strong></p>
		</main>
	</body>
</html>
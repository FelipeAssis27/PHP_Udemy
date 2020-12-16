<?php

$condicao = true;

//for valor in final || foreach array colecoes || while executa enquanto é true

while ($condicao) {

	$numero = rand(1, 10);

	if ($numero === 3) {

		echo "TRÊS!!!";
		$condicao = false;

	}

	echo $numero . " ";

}

?>
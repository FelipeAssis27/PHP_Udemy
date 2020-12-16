<?php

$condition = true;

while ($condition) {

	$numero = rand(1, 44);

		echo $numero . " ";
	
	if ($numero === 3) {

		$condition = false;
		echo "TRÊS PORRAAA!";
	}	
}

?>
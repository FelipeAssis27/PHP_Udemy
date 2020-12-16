<?php

$total = 150;
$desconto = 0.9;

do { 

	$total *= $desconto;
	echo $total;
	echo "<br>";

} while ( $total > 100);

?>
<?php

$pessoas = array();

array_push($pessoas, array(
	'nome'=>'João',
	'idade'=>20
));

array_push($pessoas, array(
	'nome'=>'Glauco',
	'idade'=>39
));

print_r($pessoas[1]['nome']);
?>
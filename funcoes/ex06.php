<?php

$pessoa = array (
	'nome'=>'João',
	'idade'=>20
);

foreach ($pessoa as &$value) {

	if (getType($value) === 'integer') $value += 10;

	echo $value. '<br>';

}

print_r($pessoa);

?>
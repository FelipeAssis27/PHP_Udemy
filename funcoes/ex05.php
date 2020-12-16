<?php

$a = 10;
function trocaValor(&$a){
//& - passagem de paramentro por referencia.assume aquele valor mesmo fora da função 

	$a += 50;

	return $a;
}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;

?>
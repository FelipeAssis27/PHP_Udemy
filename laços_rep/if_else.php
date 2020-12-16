<?php

$suaIdade = 80;

$idadeCriança = 17;
$idadeAdulto = 18;
$idadeIdoso = 65;

if ($suaIdade <= $idadeCriança){
	echo "Criança";
} else if ($suaIdade < $idadeIdoso){
	echo "Adulto";
} else {
	echo "Idoso";
}

echo "<br>";

echo ($suaIdade < $idadeAdulto)?"Menor":($suaIdade< $idadeIdoso)?"Maior":"Idoso";

?>
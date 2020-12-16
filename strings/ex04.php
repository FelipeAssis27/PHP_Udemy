<?php

$frase = "A repetição é mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, $palavra);
//retorna posição da referencia
var_dump($q);

echo "<br>";

$texto = substr($frase, 0, $q);
//retorna da posicao de refencia pra trás
var_dump($texto);

echo "<br>";

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

//$texto2 = substr($frase, $q);
//retorna da posicao de refencia em diante, constando $q
// sem $q (mãe): substr($frase, $q + 3)
var_dump($texto2);

?>
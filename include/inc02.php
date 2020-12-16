<?php

require_once "a_incluir/inc01.php";
//include "a_incluir/inc01.php";
//chamar função de outro arquivo
// tbm pode ser require
// a diferença é que o require é mais seguro, ele para se houver erro. include para intranet; require para internet.

$resultado = somar(10,20);
echo $resultado;

?>
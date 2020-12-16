<?php

function ola($texto, $periodo = "Bom Dia"){

return "Olá $texto!$periodo<br>";

}

echo ola("mundo");
echo ola ("", "Boa noite");
echo ola("Glauco", "Boa Noite");
echo ola("João", "");
?>
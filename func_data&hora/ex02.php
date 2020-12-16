<?php

date_default_timezone_set('America/Sao_Paulo');
$ts = strtotime("+1day, +4hours");

echo date("l, D-M-Y, h:i:s", $ts);

?>
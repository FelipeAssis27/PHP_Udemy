<?php

$json = '[{"nome":"Joao","idade":20},{"nome":"Glauco","idade":39}]';

$data = json_decode($json, true);

var_dump($data);

?>
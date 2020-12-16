<?php

require_once("config.php");
//entra no lugar do session_start()

$_SESSION['nome'] = "hcode";

echo $_SESSION['nome'];

?>
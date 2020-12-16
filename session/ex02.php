<?php

session_start();

//session_unset($_SESSION['nome']);
//esse comando sem a variavel apaga todos os arquivos de sessao 

//session_destroy() limpa a var e remove o usuario

echo $_SESSION['nome'];

?>
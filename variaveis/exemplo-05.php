<?php

$nome = "Glauco"." ";
function teste(){

global $nome;
echo $nome;

}

function teste2() {

	$nome = "Joao";
	echo $nome." "."agora no teste2";

}

teste();
teste2();

?>
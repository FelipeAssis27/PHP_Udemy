<?php

class Pessoa {

	public $nome; //atributo

	public function falar(){ //metodo

		return "O meu nome é ".$this->nome;

	}

}

$glaucio = new Pessoa();
$glaucio->nome = "Glaucio Dudamel";
echo $glaucio->falar();

?>
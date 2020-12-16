<form>

	<input type="text" name="Felipe">
	<input type="date" name="data de nascimento">
	<input type="submit" value="enviar">

</form>

<?php

if (isset ($_GET)) {
	
	foreach ($_GET as $key => $value) {

		echo "Nome: " . $key . "<br>";
		echo "Valor: " . $value; 
		echo "<hr>";
	}
}



?>
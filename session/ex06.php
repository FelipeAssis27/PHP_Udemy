<?php

session_start();

echo session_save_path();

echo "<br>";

var_dump(session_status()); 

echo "<br>";

switch(session_status()) {
	case PHP_SESSION_DISABLED;
	echo "as sessões estão desabilitadas";
	break; 

	case PHP_SESSION_NONE;
	echo "não existe sessão aberta";
	break;

	case PHP_SESSION_ACTIVE;
	echo "sessão aberta";
	break;
}

?>
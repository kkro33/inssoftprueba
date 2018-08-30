<?php

if (!defined('sugarEntry') || !sugarEntry)
	die('No es valido');

class HookClase {
	function funcionHook(&$bean, $event, $arguments) {

		header("Refresh: 5; url=index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3DLeads%26action%3Dindex%26return_module%3DLeads%26return_action%3DDetailView");

		echo "Hola, se realizo el gancho. Redireccionando...";
		exit();
	}
}

?>
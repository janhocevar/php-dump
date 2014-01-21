<?php
/**
* PHP Dump Function
*/

function dump ($var, $withVarTypes = false) {
	if ($withVarTypes) {
		ob_start();
		var_dump ($var);
		$var = ob_get_contents();
		ob_end_clean();
	}

	$var = ($var === true) ? '(bool)true' : $var;
	$var = ($var === false) ? '(bool)false' : $var;
	$var = (is_null($var) === true) ? '(null)' : $var;

	echo '
	<pre>' . htmlspecialchars ( $withVarTypes ? $var : print_r ($var, true) ) . '</pre>';
}
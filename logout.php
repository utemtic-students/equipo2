
<?php /* aqui destruimos la sesion */
	session_start();
	session_destroy();
	header('Location: ./');
	exit(0);
	?>

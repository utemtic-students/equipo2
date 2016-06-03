<?php
	
	session_start();
	
    $cnx = @mysql_connect("localhost", "root", "");
    @mysql_select_db("sidecu", $cnx) or die ("No hay conexion a la BD");


?>

<?php
	$con = mysql_connect("localhost", "root", "")
		or die ("A conex�o com o servidor n�o foi executada com sucesso!");
	$db = mysql_select_db("ledzone", $con)
		or die ("N�o foi poss�vel selecionar o banco de dados!");
?>
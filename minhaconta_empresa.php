<?php
	include "template/topo.php";
?>
	<center><br><br><br><h1>Qual é o nome da sua empresa?</h1><br><br>
	<form action = "Insere_minhaconta_empresa.php" method="POST" class = "cadastro">
		<input type="text" name="empresa">
		<input type="submit" name="Pesquisar" value="Pesquisa">
	</form>
	
<?php
	include "template/rodape.php";
?>
		
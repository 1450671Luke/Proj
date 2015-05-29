<?php
	include "template/topo.php";
?>
	<center><br><br><br><h1>Qual é o seu ID?</h1><br><br>
	<form action = "Insere_minhaconta_cliente.php" method="POST" class = "cadastro">
		<input type="text" name="cliente">
		<input type="submit" name="Pesquisar" value="Pesquisa">
	</form>
	
<?php
	include "template/rodape.php";
?>
		
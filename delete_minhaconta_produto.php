<?php
	include "template/topo.php";
	$nome_produto = $_GET['nome'];
	if($con){
		$sql = "SELECT * FROM novo_produto
				WHERE nome_produto = '$nome_produto';";
		$rs = mysql_query($sql, $con);
		if($rs){
			if($produto = mysql_fetch_array($rs)){
				$sql = "DELETE FROM novo_produto
						WHERE nome_produto = '$nome_produto';";
				$rs = mysql_query($sql, $con);
				if($rs){
					echo '<center><br><br><br><h1>Produto excluido com sucesso!</h1><br><br>
						<a href="minhaconta.php"><input type= "submit" name = "enviar" value= "Voltar a Minha Conta"></a>
						<a href="encomenda.php"><input type= "submit" name = "enviar" value= "Adicionar Mais Produtos"></a></center>';
					if($produto["foto_produto"] != "nouser.png"){
						unlink("imagem/".$produto["foto_produto"]);
					}
				}
				echo $sql;
			}
		}else{
			echo "<h1>Erro ao excluir o produto: </h1>".mysql_error();
		}
	}
	else{
		echo "Erro de conexão: ".mysql_error();
	}
	include "template/rodape.php";
?>
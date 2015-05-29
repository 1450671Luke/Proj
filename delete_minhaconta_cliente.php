<?php
	include "template/topo.php";
	$nome_empresa = $_GET['nome'];
	if ($con) {
		$sql = "SELECT * FROM cadastro WHERE nome_empresa =  '$nome_empresa';";
		$rs = mysql_query($sql, $con);	
		if ($rs){
			if($dados = mysql_fetch_array($rs)){
				$sql = "DELETE FROM cadastro
						WHERE nome_empresa =  '$nome_empresa';";
				$rs = mysql_query($sql, $con);
				if($rs){
					echo '<center><br><br><br><h1>Conta excluida com sucesso!</h1><br><br>
					<center><a href="cadastro.php"><input type= "submit" name = "enviar" value= "Cadastre-se"></a></center>';
					if($dados["foto_cliente"] != "nouser.png"){
						unlink("imagem/".$dados["foto_cliente"]);
					}
				}
			}
		}else{
			echo "<h1>Erro ao excluir o cliente: </h1>".mysql_error();
		}
	}
	else{
		echo "Erro de conexão: ".mysql_error();
	}
	include "template/rodape.php";
?>
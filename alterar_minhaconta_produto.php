<?php
	include "template/topo.php";
	if($con){
		$nome_produto = $_GET['nome'];
		$sql = "select * from novo_produto where nome_produto = '$nome_produto';";
		$rs = mysql_query($sql, $con);
		if($rs){
			if($produto = mysql_fetch_array($rs)){?>
				<form action="alter_produto.php" method='POST' class="adicionar" enctype="multipart/form-data">
						<br>
						<b>Nome da empresa:</b><br> <input type= "text" name= "nome_empresa" value="<?php echo $produto['nome_empresa']; ?>" size= "50" maxlength= "100"><br><br>
						<b>Nome do Produto:</b><br> <input type= "text" name= "nome_produto" value="<?php echo $produto['nome_produto']; ?>" size= "50" maxlength= "100"><br><br>
						<b>Preço do produto:</b><br> <input type= "text" name= "preco_produto" value="<?php echo $produto['preco_produto']; ?>" size= "50" maxlength= "100"><br><br>
						<b>Modelo:</b><br> <input type= "text" name= "modelo_produto" value="<?php echo $produto['modelo_produto']; ?>" size= "50" maxlength= "100"><br><br>
						<b>Tamanho:</b><br> <input type= "text" name= "tamanho" value="<?php echo $produto['tamanho']; ?>" size= "50" maxlength= "100"><br><br>
						<b>Cor:</b><br> <input type= "text" name= "cor_produto" value="<?php echo $produto['cor_produto']; ?>" size= "50" maxlength= "100"><br><br>
						<b>Quantidade no Estoque:</b><br> <input type= "text" name= "qt_estoque" value="<?php echo $produto['qt_estoque']; ?>" size= "50" maxlength= "100"><br><br>
						<b>Descrição:</b><br> <textarea name= "descricao"  rows = "7" cols = "83"> <?php echo $produto['pequena_descricao']; ?>"Pequena descrição</textarea><br><br>
						<b>Imagem do produto:</b><br> <img src="imagem/<?php echo $produto["foto_produto"] ?>" alt="imagem" height="50"><input type="file" name="foto" id="foto"><br><br>
						<input type= "submit" name= "enviar" value= "Salvar Alterações">
				</form>	
			<?php
			}
			else{
				echo "<h1>Esse Produto não Existe</h1>";
			}
			mysql_free_result($rs);
		}
		else{
			echo "Erro de consulta de produtos: ".mysql_error();
		}
	}
	else{
		echo "Erro de conexão: ".mysql_error();
	}
?>
<?php
	include "template/rodape.php"
	//header ("location: localhost/crud/index.php");
?> 
<?php
	include "template/topo.php";
?>
		<div id = "inserir_produto">
			<div id = "titulo">
				<h1 align = "center">Adicione seu produto!   <img src="imagens/menu/encomenda.png" alt="adicionar" width = "50px"/></h1>
			</div><!--fechamento da div titulo-->
				<form action="insere_produto.php" method="POST" class="adicionar" enctype="multipart/form-data">
						<b>ID da empresa:</b><br> <input type= "text" name= "ID_empresa" size= "50" maxlength= "100"><br><br>
						<b>Nome da empresa:</b><br> <input type= "text" name= "nome_empresa" size= "50" maxlength= "100"><br><br>
						<b>Categoria:</b><br> <input type= "text" name= "categoria" size= "50" maxlength= "100"><br><br>
						<b>Nome do Produto:</b><br> <input type= "text" name= "nome_produto" size= "50" maxlength= "100"><br><br>
						<b>Preço do produto:</b><br> <input type= "text" name= "preco_produto" size= "50" maxlength= "100"><br><br>
						<b>Modelo:</b><br> <input type= "text" name= "modelo_produto" size= "50" maxlength= "100"><br><br>
						<b>Tamanho:</b><br> <input type= "text" name= "tamanho" size= "50" maxlength= "100"><br><br>
						<b>Cor:</b><br> <input type= "text" name= "cor_produto" size= "50" maxlength= "100"><br><br>
						<b>Quantidade no Estoque:</b><br> <input type= "text" name= "qt_estoque" size= "50" maxlength= "100"><br><br>
						<b>Descrição:</b><br> <textarea name= "descricao" rows = "7" cols = "83">Pequena descrição</textarea><br><br>
						<b>Imagem do produto:</b><br> <input type="file" name="foto" id="foto"><br><br>
						<input type= "submit" name= "enviar" value= "enviar">
				</form>	
		</div><!--fechamento da div encomenda-->
<?php
	include "template/rodape.php";
?>
<!--nome_produto, preco_produto, modelo_produto, tamanho, cor_produto, pequena_descricao-->
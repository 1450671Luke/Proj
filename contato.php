<?php
	include "template/topo.php";
?>
		<div id = "encomenda">
			<div id = "titulo">
				<h1 align = "center">Mande uma mensagem para nós!   <img src="imagens/mensagem.png" alt="Encomenda" width = "50px"/></h1>
				<form action="insere_contato.php" method=POST enctype=multipart/form-data" class="adicionar">
						<br>
						<b>Nome do Cliente:</b><br> <input type= "text" name= "nome_cliente" size= 50 maxlength= 100><br><br>
						<b>Assunto:</b><br> <input type= "text" name= "assunto" size= 50 maxlength= 100><br><br>
						<b>Mensagem:</b><br> <textarea name= "mensagem" rows = "7" cols = "83">  Mensagem...</textarea><br><br>
						<input type= "submit" name= "enviar" value= "enviar">
				</form>
			</div><!--fechamento da div titulo-->
		</div><!--fechamento da div encomenda-->
<?php
	include "template/rodape.php";
?>
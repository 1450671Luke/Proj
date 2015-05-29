<?php
	include "template/topo.php";
	$nome_empresa  = $_POST['nome_empresa'];
	$nome_produto  = $_POST['nome_produto'];  
	$preco_produto  = $_POST['preco_produto'];  
	$modelo_produto  = $_POST['modelo_produto']; 
	$tamanho  = $_POST['tamanho'];  
	$cor_produto  = $_POST['cor_produto'];  
	$pequena_descricao  = $_POST['descricao']; 
	$qt_estoque  = $_POST['qt_estoque'];
	
	if ($_FILES["foto"]["error"] == 0){
		$ext = substr($_FILES["foto"]["name"], strpos(strrev($_FILES["foto"]["name"]), ".")*-1);
		$foto = md5(time().$_FILES["foto"]["name"]).".".$ext;
		move_uploaded_file($_FILES["foto"]["tmp_name"],"imagem/".$foto);
	}
	else{
		$foto = -1;
	}
	if($con){
		$sql = "
		UPDATE novo_produto set 	
			nome_empresa  = '$nome_empresa',
			nome_produto  = '$nome_produto',  
			preco_produto  = '$preco_produto',  
			modelo_produto  = '$modelo_produto', 
			tamanho  = '$tamanho',  
			cor_produto  = '$cor_produto',  
			pequena_descricao  = '$pequena_descricao', 
			qt_estoque  = '$qt_estoque'".
			($foto == -1?  "" : ", foto_produto = '$foto'").
		"WHERE nome_empresa = '$nome_empresa';";
		$rs = mysql_query($sql, $con);	
		if ($rs) {
			echo '<br><br><br><center><h1>Produto Alterado com Sucesso.</h1></center>
				  <center><a href="cadastro.php"><input type= "submit" name = "enviar" value= "Volte ao menu principal"></a>
				  <a href="Insere_minhaconta.php"><input type= "submit" name = "enviar" value= "Altere mais produtos"></a></center>';
		}else{
			echo "Erro de alteração: ".mysql_error();
		}
	}else{
		echo "Erro de conexão".mysql_error();
	}
	include "template/rodape.php"
?>
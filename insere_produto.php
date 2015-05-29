<?php 
	include "template/topo.php";
	$codigo = $_POST['ID_empresa'];
	$nome_empresa = $_POST['nome_empresa'];
	$categoria = $_POST['categoria'];
	$nome_produto = $_POST['nome_produto'];
	$preco_produto = $_POST['preco_produto'];
	$modelo_produto  = $_POST['modelo_produto'];
	$tamanho_produto  = $_POST['tamanho'];
	$cor_produto  = $_POST['cor_produto'];
	$qt_estoque  = $_POST['qt_estoque'];
	$pequena_descricao  = $_POST['descricao'];
	if ($_FILES["foto"]["error"] == 0){
		$ext = substr($_FILES["foto"]["name"],
						strpos(strrev($_FILES["foto"]["name"]), ".")*-1);
		$foto = md5(time().$_FILES["foto"]["name"]).".".$ext;
		move_uploaded_file($_FILES["foto"]["tmp_name"],"imagem/".$foto);
	}
	else{
		$foto = "nouser.png";
	}
	if($con) {
		$sql = "insert into novo_produto (nome_empresa, codigo, categoria,  nome_produto, preco_produto, modelo_produto, tamanho, cor_produto, qt_estoque, pequena_descricao, foto_produto)".
			"values ('$nome_empresa', '$codigo', '$categoria', '$nome_produto', '$preco_produto', '$modelo_produto', '$tamanho_produto', '$cor_produto', '$qt_estoque', '$pequena_descricao', '$foto')";
		$rs = mysql_query($sql, $con);
		if ($rs) {
			echo ('<h1>Novo produto adicionado</h1>
					<a href="encomenda.php"><input type= "submit" name = "enviar" value= "Adicionar mais produtos"></a>
					<a href="index.php"><input type= "submit" name = "enviar" value= "Vizualizar"></a>');
			#mysql_free_result($rs);
		}else {
			echo ("Erro de inclusão: ".mysql_error());
		}
	}else{
		echo ("Erro de conexão".mysql_error());
	}
	#mysql_free_result($rs);
	mysql_close($con);
	include "template/rodape.php";
?>
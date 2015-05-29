<?php
	include "template/topo.php";
	if($con) {
		/*INFO IMG*/
		$imagem = $_FILES['img'];
		$nome = $imagem['name'];
		$tmp = $imagem['tmp_name'];
		$size = $imagem['size'];
		$formato = end(explode('.',$nome));
		/*DEFINIÇÕES DA IMG*/
		$pasta = "img/";
		$extensoes = array('jpg','jpeg','png');
		$tamanho = 1048576;
			
		if(empty($nome)){
			echo '<script>alert("Escolha uma imagem!");</script>';
		}elseif($tamanho < $size){
			echo '<script>alert("Imagem Muito Grande! Apenas 1MB");</script>';
		}elseif(!in_array($formato, $extensoes)){
			echo '<script>alert("Imagem em formato inválido! Apenas em JPG e PNG");</script>';
		}else{
			/*FORMANDO O NOME DA IMG*/
			$nome = 'LEDZONE'.uniqid().'.'.$formato;
			$upload = move_uploaded_file($tmp, $pasta.'/'. $nome);
			if($upload){
				$sql = mysql_query("insert into imagens (imagem)"."values ('$nome')");
				echo '<script>alert("Imagem enviada!");</script>';
			}else{
				echo '<script>alert("ERRO!");</script>';
			}
		}	
		
		echo $pasta,$nome;
		
		$nm_produto = $_POST['nm_produto'];
		$descricao = $_POST['descricao'];
	
		$sql = "insert into encomenda (nm_produto, descricao)".
			"values ('$nm_produto', '$descricao')";
		$rs = mysql_query($sql, $con);
		if ($rs) {
			echo $nm_produto = $_POST['nm_produto'];
			#mysql_free_result($rs);
		}else {
			echo ("Erro de inclusão: ".mysql_error());
		}
	}else{
		echo ("Erro de conexão".mysql_error());
	}
	include "template/rodape.php";
?>
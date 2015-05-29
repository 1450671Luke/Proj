<?php
	include "template/topo.php";
	$nome_empresa = $_POST['nome_empresa'];
	$nome_cliente = $_POST['nome_cliente'];
	$sobrenome_cliente = $_POST['sobrenome_cliente'];
	$dt_nascimento = $_POST['nasc'];
	$idade = $_POST['idade'];
	$sexo_cliente = $_POST['sexo_cliente'];
	$rg = $_POST['rg'];
	$cpf = $_POST['cpf'];
	$telefone = $_POST['tel'];
	$celular = $_POST['cel'];
	$endereco_rua = $_POST['rua'];
	$endereco_numero = $_POST['numero'];
	$endereco_bairro = $_POST['bairro'];
	$endereco_estado = $_POST['estado'];
	$endereco_cidade = $_POST['cidade'];
	$cep = $_POST['cep'];
	$email = $_POST['email'];
	$nickname = $_POST['nickname'];
	$senha = $_POST['pass'];
	$confirmar_senha = $_POST['passconfirm'];
	
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
		UPDATE cadastro set 	
			nome_empresa = '$nome_empresa',
			nome  = '$nome_cliente',
			sobrenome = '$sobrenome_cliente',
			dt_nascimento = '$dt_nascimento',
			idade = '$idade',
			sexo = '$sexo_cliente',
			rg = '$rg',
			cpf = '$cpf',
			telefone = '$telefone',
			celular = '$celular',
			rua = '$endereco_rua',
			numero = '$endereco_numero',
			bairro = '$endereco_bairro',
			estado = '$endereco_estado',
			cidade = '$endereco_cidade',
			cep = '$cep',
			email = '$email',
			nickname = '$nickname',
			senha = '$senha'".
			($foto == -1?  "" : ", foto_cliente = '$foto'").
		"WHERE nome_empresa = '$nome_empresa';";
		$rs = mysql_query($sql, $con);	
		if ($rs) {
			echo "<h1>Cadastrado atualizado com sucesso.</h1>";
			echo '<center><a href="index.php"><input type= "submit" name = "enviar" value= "Volte ao menu principal"></a>';
		}else{
			echo "Erro de alteração: ".mysql_error();
		}
	}else{
		echo "Erro de conexão".mysql_error();
	}
	include "template/rodape.php"
?>
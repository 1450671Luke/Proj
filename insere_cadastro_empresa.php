<?php
	include "template/topo.php";
	$nome_empresa = $_POST['nome_empresa'];
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$telefone = $_POST['tel'].$_POST['tel2'];
	$celular = $_POST['cel'].$_POST['cel2'];
	$endereco_rua = $_POST['rua'];
	$endereco_numero = $_POST['numero'];
	$endereco_bairro = $_POST['bairro'];
	$endereco_estado = $_POST['estado'];
	$endereco_cidade = $_POST['cidade'];
	$cep = $_POST['cep'].$_POST['cep2'];
	if ($_FILES["foto"]["error"] == 0){
		$ext = substr($_FILES["foto"]["name"], strpos(strrev($_FILES["foto"]["name"]), ".")*-1);
		$foto = md5(time().$_FILES["foto"]["name"]).".".$ext;
		move_uploaded_file($_FILES["foto"]["tmp_name"],"imagem/".$foto);
	}
	else{
		$foto = "nouser.png";
	}
	if($con) {
		$sql = "insert into empresa (nome_empresa, nome, sobrenome, telefone, celular, rua, numero, bairro, estado, cidade, cep, foto_empresa)".
			"values ('$nome_empresa', '$nome', '$sobrenome', '$telefone', '$celular', '$endereco_rua', '$endereco_numero', '$endereco_bairro', '$endereco_estado', '$endereco_cidade', '$cep', '$foto')";
		$rs = mysql_query($sql, $con);
		if ($rs) {
			echo "<br><br><b class = 'sucesso'><center>Parabéns $nome, cadastro concluído com sucesso!</center></b><br>"?>
			<center><table border = '1' width = '600px' height = '100px' bgcolor = 'red' class = 'table'>
				<tr align = 'center' bgcolor = '#67ff4a'>
					<th>ID</th>
					<th>Nome da Empresa</th>
					<th>Nome Fornecedor</th>
					<th>Celular</th>
					<th>Telefone:</th>
					<th>Rua</th>
					<th>Número</th>
					<th>Bairro</th>
					<th>Estado</th>
					<th>Cidade</th>
					<th>CEP</th>	
				</tr>
				<tr align = 'center' bgcolor = '#67ff4a'>
					<?php $sql = "SELECT * FROM empresa WHERE ";
					$rs = mysql_query($sql,$con);
					if($dados = mysql_fetch_array($rs)){?> 
						<td><?php echo $dados['cod_empresa']; ?></td>
					<?php } ?>
					<td><?php echo $nome_empresa ?></td>
					<td><?php echo $nome ?></td>
					<td><?php echo $celular ?></td>
					<td><?php echo $telefone ?></td>
					<td><?php echo $endereco_rua ?></td>
					<td><?php echo $endereco_numero ?></td>
					<td><?php echo $endereco_bairro ?></td>
					<td><?php echo $endereco_estado ?></td>
					<td><?php echo $endereco_cidade ?></td>
					<td><?php echo $cep ?></td>
				</tr>
			</table><center>
			<form action = "minhaconta_empresa.php" method="POST" class = "cadastro">
				<input type="submit" value="Salvar">
			</form>
			<?php 
			#mysql_free_result($rs);
		 
		}else {
			echo ("Erro de inclusão: ".mysql_error());
		}
	}else{
		echo ("Erro de conexão".mysql_error());
	}
	include "template/rodape.php";
?>
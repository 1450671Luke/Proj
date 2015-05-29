<?php
	include "template/topo.php";
		$cliente = $_POST["cliente"];
		$sql = mysql_query("SELECT * FROM cliente WHERE cod_cliente = $cliente");
		$numRegistros = mysql_num_rows($sql);
		if ($numRegistros != 0) {		
			$sql = "SELECT * FROM cliente WHERE cod_cliente = $cliente";
			$rs = mysql_query($sql,$con);
			while($dados = mysql_fetch_array($rs)){?> 
				<center><br><br><br><h1>Meus Dados</h1><br><br>
				<center><table border = '1' width = '600px' height = '100px' bgcolor = 'red' 	class = 'table'>
						<tr align = 'center' bgcolor = '#67ff4a'>
							<th>ID</th>
							<th>Foto de perfil</th>
							<th>Nome Completo</th>
							<th>Data de Nascimento</th>
							<th>Sexo:</th>
							<th>Telefone:</th>
							<th>Rua</th>
							<th>Número</th>
							<th>Bairro</th>
							<th>Estado</th>
							<th>Cidade</th>
							<th>E-mail</th>
						</tr>
						<tr align = 'center' bgcolor = '#67ff4a'>
							<td><?php echo $dados['cod_cliente']; ?></td>
							<td><img src="imagem/<?php echo $dados["foto_cliente"]; ?>" alt="imagem/nouser.png" height="70"></td>
							<td><?php echo $dados['nome']." ".$dados['sobrenome']; ?></td>
							<td><?php echo $dados['dt_nascimento']; ?></td>
							<td><?php echo $dados['sexo']; ?></td>
							<td><?php echo $dados['telefone']; ?></td>
							<td><?php echo $dados['rua']; ?></td>
							<td><?php echo $dados['numero']; ?></td>
							<td><?php echo $dados['bairro']; ?></td>
							<td><?php echo $dados['estado']; ?></td>
							<td><?php echo $dados['cidade']; ?></td>
							<td><?php echo $dados['email']; ?></td>
						</tr>
						<tr>
							<th colspan = "12" rowspan = "2"><center><button><a href= 'alterar_minhaconta_cliente.php?nome=<?php echo $dados["nome_empresa"];?>'><img src="imagens/editar.png" alt="editar" width = "15px"/> Alterar</a></button>
								<button><a href= 'delete_minhaconta_cliente.php?nome=<?php echo $dados["nome_empresa"];?>'><img src="imagens/retirar.jpg" alt="editar" width = "15px"/> Deletar</a></button></center></th>
						</tr>
					</table><center>
	<?php
				}
			}
		else{
			echo "<br><br><center><h1> Esse Cliente '$cliente' Não Existe!</h1><br><br>
				<a href='javascript:history.go(-1)'><button><img src='imagens/voltar2.png' alt='back' height='20'>Tente Novamente</button></a></center>";
		}
	include "template/rodape.php";
?>
		
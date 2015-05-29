<?php
	include "template/topo.php";
		$empresa = $_POST["empresa"];
		$sql = mysql_query("SELECT * FROM empresa WHERE cod_empresa = $empresa;");
		$numRegistros = mysql_num_rows($sql);
		if ($numRegistros != 0) {		
			$sql = "SELECT * FROM empresa WHERE cod_empresa = $empresa;";
			$rs = mysql_query($sql,$con);
			while($dados = mysql_fetch_array($rs)){?> 
				<center><br><br><br><h1>Meus Dados</h1><br><br>
				<center><table border = '1' width = '600px' height = '100px' bgcolor = 'red' 	class = 'table'>
						<tr align = 'center' bgcolor = '#67ff4a'>
							<th>ID</th>
							<th>Foto de perfil</th>
							<th>Empresa</th>
							<th>Nome Completo</th>
							<th>Telefone:</th>
							<th>Rua</th>
							<th>Número</th>
							<th>Bairro</th>
							<th>Estado</th>
							<th>Cidade</th>
							<th>CEP</th>
						</tr>
						<tr align = 'center' bgcolor = '#67ff4a'>
							<td><?php echo $dados['cod_empresa']; ?></td>
							<td><img src="imagem/<?php echo $dados["foto_empresa"]; ?>" alt="imagem/nouser.png" height="70"></td>
							<td><?php echo $dados['nome']." ".$dados['sobrenome']; ?></td>
							<td><?php echo $dados['nome_empresa']; ?></td>
							<td><?php echo $dados['telefone']; ?></td>
							<td><?php echo $dados['rua']; ?></td>
							<td><?php echo $dados['numero']; ?></td>
							<td><?php echo $dados['bairro']; ?></td>
							<td><?php echo $dados['estado']; ?></td>
							<td><?php echo $dados['cidade']; ?></td>
							<td><?php echo $dados['cep']; ?></td>
						</tr>
						<tr>
							<th colspan = "12" rowspan = "2"><center><button><a href= 'alterar_minhaconta_cliente.php?nome=<?php echo $dados["nome_empresa"];?>'><img src="imagens/editar.png" alt="editar" width = "15px"/> Alterar</a></button>
								<button><a href= 'delete_minhaconta_cliente.php?nome=<?php echo $dados["nome_empresa"];?>'><img src="imagens/retirar.jpg" alt="editar" width = "15px"/> Deletar</a></button></center></th>
						</tr>
					</table><center>
	<?php
			}
			$sql = mysql_query("SELECT * FROM novo_produto as n INNER JOIN empresa as e ON n.codigo = e.cod_empresa");
			$numRegistros = mysql_num_rows($sql);
			if($numRegistros != 0){ 
				$sql = "SELECT * FROM novo_produto as n INNER JOIN empresa as e ON n.codigo = e.cod_empresa";
				$rs = mysql_query($sql,$con);
				echo "<center><br><br><br><h1>Meus Produtos</h1><br><br>";
				while($produto = mysql_fetch_array($rs)){?>
					<div id="produto">
						<div id="imagem_produto">
							<div = id="imagem_produto1">
								<img src="imagem/<?php echo $produto["foto_produto"]; ?>" alt="imagem/nouser.png" width="170px" height="139px">		
							</div><!--Fechamento da div imagem_produto1-->
						</div><!--Fechamento da div imagem_produto-->
							<div = id="produto1">
								<?php echo "<b>Produto: </b>".$produto['nome_produto'];?><br>
								<?php echo "<b>Por apenas: </b>".$produto['preco_produto'];?><br>
								<?php echo "<b>Quantidade de Produtos: </b>".$produto['qt_estoque'];?><br><br>
								<button><a href= 'alterar_minhaconta_produto.php?nome=<?php echo $produto["nome_produto"];?>'><img src="imagens/editar.png" alt="Contatos" width = "15px"/> Alterar</a></button>
								<button><a href= 'delete_minhaconta_produto.php?nome=<?php echo $produto["nome_produto"];?>'><img src="imagens/retirar.jpg	" alt="Contatos" width = "15px"/> Deletar</a></button><br>
							</div><!--Fechamento da div produto1-->
					</div><!--Fechamento da div produto-->
	<?php
				}
			}
		}
		else{
			echo "<br><br><center><h1> Essa Empresa '$empresa' Não Existe!</h1><br><br>
				<a href='javascript:history.go(-1)'><button><img src='imagens/voltar2.png' alt='back' height='20'>Tente Novamente</button></a></center>";
		}
	include "template/rodape.php";
?>
		
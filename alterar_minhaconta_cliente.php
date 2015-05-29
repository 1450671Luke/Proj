<?php
	include "template/topo.php";
	if($con){
		$nome_empresa = $_GET['nome'];
		$sql = "select * from cadastro where nome_empresa = '$nome_empresa';";
		$rs = mysql_query($sql, $con);
		if($rs){
			if($dados = mysql_fetch_array($rs)){?>
				<form action = "alter_cliente.php" method="post" class = "cadastro">
					<!-- DADOS PESSOAIS-->
						<fieldset>
						<legend><b class = "leg">Dados Pessoais</b></legend>
						<table cellspacing="10" class = "b">
							<tr>
								<td>
									<label for="nome">Nome da empresa: </label>
								</td>
								<td align="left">
									<input type="text" name="nome_empresa" value="<?php echo $dados['nome_empresa']; ?>" readonly>
								</td>
							</tr>
							<tr>
								<td>
									<label for="nome">Nome: </label>
								</td>
								<td align="left">
									<input type="text" name="nome_cliente" value="<?php echo $dados['nome']; ?>">
								</td>
								<td>
									<label for="sobrenome">Sobrenome: </label>
								</td>
								<td align="left">
									<input type="text" name="sobrenome_cliente" value="<?php echo $dados['sobrenome']; ?>">
								</td>
							</tr>						
							<tr>
								<td>
									<label>Data de nascimento: </label>
								</td>
								<td align="left">
									<input type="date" name="nasc" size="4" maxlength="4" value="<?php echo $dados['dt_nascimento']; ?>"> 
								</td>
							</tr>
							<tr>
								<td>
									<label for="rg">Idade: </label>
								</td>
								<td align="left">
									<input type="text" name="idade" size="2" maxlength="2" value="<?php echo $dados['idade']; ?>"> 
								</td>
							</tr>
							<tr>
								<td>
									<label>Sexo:</label>
								</td>
								<td align="left">
									<input type= "radio" name= "sexo_cliente" value = "M" <?php echo ($dados["sexo"] == "M"?"CHECKED":"");?>>Masculino</input> 
									<input type= "radio" name= "sexo_cliente" value = "F" <?php echo ($dados["sexo"] == "F"?"CHECKED":"");?>>Feminino</input>
								</td>
							</tr>
							<tr>
								<td>
									<label for="rg">RG: </label>
								</td>
								<td align="left">
									<input type="text" name="rg" size="13" maxlength="13" value="<?php echo $dados['rg']; ?>"> 
								</td>
							</tr>							
							<tr>
								<td>
									<label>CPF:</label>
								</td>
								<td align="left">
									<input type="text" name="cpf" size="9" maxlength="9" value="<?php echo $dados['cpf']; ?>">
								</td>
							</tr>
							<tr>
								<td>
									<label>Telefone:</label>
								</td>
								<td align="left">
									<input type="text" name="tel" size="10" maxlength="12" value="<?php echo $dados['telefone']; ?>">
								</td>
							</tr>
							<tr>
								<td>
									<label>Celular:</label>
								</td>
								<td align="left">
									<input type="text" name="cel" size="9" maxlength="9" value="<?php echo $dados['celular']; ?>">
								</td>
							</tr>
						</table>
						</fieldset>
						<br />					
					<!-- ENDEREÇO -->
						<fieldset>
						<legend><b class = "leg">Dados de Endereço</b></legend>
						<table cellspacing="10" class = "b">
							<tr>
								<td>
									<label for="rua">Rua:</label>
								</td>
								<td align="left">
									<input type="text" name="rua" value="<?php echo $dados['rua']; ?>">
								</td>
								<td>
									<label for="numero">Numero:</label>
								</td>
								<td align="left">
									<input type="text" name="numero" size="4" value="<?php echo $dados['numero']; ?>">
								</td>
							</tr>							
							<tr>
								<td>
									<label for="bairro">Bairro: </label>
								</td>
								<td align="left">
									<input type="text" name="bairro" value="<?php echo $dados['bairro']; ?>">
								</td>
							</tr>							
							<tr>
								<td>
									<label for="estado">Estado:</label>
								</td>
								<td align="left">
									<select name="estado" selected="<?php echo $dados['estado']; ?>">  
										<option value="AC" <?php echo ($valor['estado'] == "AC")?'selected':''?>>Acre</option> 
										<option value="AL" <?php echo ($valor['estado'] == "AL")?'selected':''?>>Alagoas</option> 
										<option value="AM" <?php echo ($valor['estado'] == "AM")?'selected':''?>>Amazonas</option> 
										<option value="AP" <?php echo ($valor['estado'] == "AP")?'selected':''?>>Amapá</option> 
										<option value="BA" <?php echo ($valor['estado'] == "BA")?'selected':''?>>Bahia</option> 
										<option value="CE" <?php echo ($valor['estado'] == "CE")?'selected':''?>>Ceará</option> 
										<option value="DF" <?php echo ($valor['estado'] == "DF")?'selected':''?>>Distrito Federal</option> 
										<option value="ES" <?php echo ($valor['estado'] == "ES")?'selected':''?>>Espírito Santo</option> 
										<option value="GO" <?php echo ($valor['estado'] == "GO")?'selected':''?>>Goiás</option> 
										<option value="MA" <?php echo ($valor['estado'] == "MA")?'selected':''?>>Maranhão</option> 
										<option value="MT" <?php echo ($valor['estado'] == "MT")?'selected':''?>>Mato Grosso</option> 
										<option value="MS" <?php echo ($valor['estado'] == "MS")?'selected':''?>>Mato Grosso do Sul</option> 
										<option value="MG" <?php echo ($valor['estado'] == "MG")?'selected':''?>>Minas Gerais</option> 
										<option value="PA" <?php echo ($valor['estado'] == "PA")?'selected':''?>>Pará</option> 
										<option value="PB" <?php echo ($valor['estado'] == "PB")?'selected':''?>>Paraíba</option> 
										<option value="PR" <?php echo ($valor['estado'] == "PR")?'selected':''?>>Paraná</option> 
										<option value="PE" <?php echo ($valor['estado'] == "PE")?'selected':''?>>Pernambuco</option> 
										<option value="PI" <?php echo ($valor['estado'] == "PI")?'selected':''?>>Piauí</option> 
										<option value="RJ" <?php echo ($valor['estado'] == "RJ")?'selected':''?>>Rio de Janeiro</option> 
										<option value="RN" <?php echo ($valor['estado'] == "RN")?'selected':''?>>Rio Grande do Norte</option> 
										<option value="RO" <?php echo ($valor['estado'] == "RO")?'selected':''?>>Rondônia</option> 
										<option value="RS" <?php echo ($valor['estado'] == "RS")?'selected':''?>>Rio Grande do Sul</option> 
										<option value="RR" <?php echo ($valor['estado'] == "RR")?'selected':''?>>Roraima</option> 
										<option value="SC" <?php echo ($valor['estado'] == "SC")?'selected':''?>>Santa Catarina</option> 
										<option value="SE" <?php echo ($valor['estado'] == "SE")?'selected':''?>>Sergipe</option> 
										<option value="SP" <?php echo ($valor['estado'] == "SP")?'selected':''?>>São Paulo</option> 
										<option value="TO" <?php echo ($valor['estado'] == "TO")?'selected':''?>>Tocantins</option> 
									</select>
								</td>
							</tr>							
							<tr>
								<td>
									<label for="cidade">Cidade: </label>
								</td>
								<td align="left">
									<input type="text" name="cidade" value="<?php echo $dados['cidade']; ?>">
								</td>
							</tr>							
							<tr>
								<td>
									<label for="cep">CEP: </label>
								</td>
								<td align="left">
									<input type="text" name="cep" size="8" maxlength="8" value="<?php echo $dados['cep']; ?>">
								</td>
							</tr>
						</table>
						</fieldset>
						<br />
					<!-- DADOS DE LOGIN -->
						<fieldset>
						<legend><b class = "leg">Dados de login</b></legend>
						<table cellspacing="10" class = "b">						
							<tr>
								<td>
									<label for="email">E-mail: </label>
								</td>
								<td align="left">
									<input type="text" name="email" value="<?php echo $dados['email']; ?>">
								</td>
							</tr>						
							<tr>
								<td>
									<label for="imagem">Imagem de perfil:</label>
								</td>
								<td>
									<img src="imagem/<?php echo $dados['foto_cliente'] ?>" alt="imagem" height="50"><input type="file" name="foto" id="foto">
								</td>
							</tr>							
							<tr>
								<td>
									<label for="login">Nickname: </label>
								</td>
								<td align="left">
									<input type="text" name="nickname" value="<?php echo $dados['nickname']; ?>">
								</td>
							</tr>							
							<tr>
								<td>
									<label for="pass">Senha: </label>
								</td>
								<td align="left">
									<input type="password" name="pass" value="<?php echo $dados['senha']; ?>">
								</td>
							</tr>							
							<tr>
								<td>
									<label for="passconfirm">Confirme a senha: </label>
								</td>
								<td align="left">
									<input type="password" name="passconfirm" value="<?php echo $dados['senha']; ?>">
								</td>
							</tr>
						</table>
						</fieldset>				
						<br />					
						<input type="checkbox" name="reglas" checked="checked" /> Aceito todas as regras<br />
						<br />					
						<input type="submit" name="Salvar Alterações">				
						<input type="reset" value="Limpar">					
					</form>	
			<?php
			}
			else{
				echo "<h1>Usuário não cadastrado</h1>";
			}
			mysql_free_result($rs);
		}
		else{
			echo "Erro de consulta de clientes: ".mysql_error();
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
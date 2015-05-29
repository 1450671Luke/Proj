<?php
	include "template/topo.php";
?>
	<form action = "insere_cadastro_empresa.php" method="POST" class = "cadastro" enctype="multipart/form-data">
					<!-- DADOS PESSOAIS-->
						<fieldset>
						<legend><b class = "leg">Dados Pessoais</b></legend>
						<table cellspacing="10" class = "b">
							<tr>
								<td>
									<label for="nome">Nome da empresa: </label>
								</td>
								<td align="left">
									<input type="text" name="nome_empresa">
								</td>
							</tr>
							<tr>
								<td>
									<label for="nome">Nome do Fornecedor: </label>
								</td>
								<td align="left">
									<input type="text" name="nome">
								</td>
								<td>
									<label for="sobrenome">Sobrenome do Fornecedor: </label>
								</td>
								<td align="left">
									<input type="text" name="sobrenome">
								</td>
							</tr>
							<tr>
								<td>
									<label>Telefone:</label>
								</td>
								<td align="left">
									<input type="text" name="tel" size="8" maxlength="8"> - <input type="text" name="tel2" size="4" maxlength="4">
								</td>
							</tr>
							<tr>
								<td>
									<label>Celular:</label>
								</td>
								<td align="left">
									<input type="text" name="cel" size="9" maxlength="9"> - <input type="text" name="cel2" size="4" maxlength="4">
								</td>
							</tr>
							<tr>
								<td>
									<label for="imagem">Imagem da empresa:</label>
								</td>
								<td>
									<input type="file" name="foto" id="foto">
								</td>
							</tr>	
						</table>
						</fieldset>
						<br>					
					<!-- ENDEREÇO -->
						<fieldset>
						<legend><b class = "leg">Dados de Endereço</b></legend>
						<table cellspacing="10" class = "b">
							<tr>
								<td>
									<label for="rua">Rua:</label>
								</td>
								<td align="left">
									<input type="text" name="rua">
								</td>
								<td>
									<label for="numero">Numero:</label>
								</td>
								<td align="left">
									<input type="text" name="numero" size="4">
								</td>
							</tr>							
							<tr>
								<td>
									<label for="bairro">Bairro: </label>
								</td>
								<td align="left">
									<input type="text" name="bairro">
								</td>
							</tr>							
							<tr>
								<td>
									<label for="estado">Estado:</label>
								</td>
								<td align="left">
									<select name="estado"> 
										<option value="ac">Acre</option> 
										<option value="al">Alagoas</option> 
										<option value="am">Amazonas</option> 
										<option value="ap">Amapá</option> 
										<option value="ba">Bahia</option> 
										<option value="ce">Ceará</option> 
										<option value="df">Distrito Federal</option> 
										<option value="es">Espírito Santo</option> 
										<option value="go">Goiás</option> 
										<option value="ma">Maranhão</option> 
										<option value="mt">Mato Grosso</option> 
										<option value="ms">Mato Grosso do Sul</option> 
										<option value="mg">Minas Gerais</option> 
										<option value="pa">Pará</option> 
										<option value="pb">Paraíba</option> 
										<option value="pr">Paraná</option> 
										<option value="pe">Pernambuco</option> 
										<option value="pi">Piauí</option> 
										<option value="rj">Rio de Janeiro</option> 
										<option value="rn">Rio Grande do Norte</option> 
										<option value="ro">Rondônia</option> 
										<option value="rs">Rio Grande do Sul</option> 
										<option value="rr">Roraima</option> 
										<option value="sc">Santa Catarina</option> 
										<option value="se">Sergipe</option> 
										<option value="sp">São Paulo</option> 
										<option value="to">Tocantins</option> 
									</select>
								</td>
							</tr>							
							<tr>
								<td>
									<label for="cidade">Cidade: </label>
								</td>
								<td align="left">
									<input type="text" name="cidade">
								</td>
							</tr>							
							<tr>
								<td>
									<label for="cep">CEP: </label>
								</td>
								<td align="left">
									<input type="text" name="cep" size="5" maxlength="5"> - <input type="text" name="cep2" size="3" maxlength="3">
								</td>
							</tr>
						</table>
						</fieldset>				
						<br>					
						<input type="checkbox" name="reglas" checked="checked" /> Aceito todas as regras<br>
						<br>					
						<input type="submit">				
						<input type="reset" value="Limpar">					
					</form>							
				</div><!--Fechamento da div form-->
<?php
	include "template/rodape.php";
?>	
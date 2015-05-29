<!DOCTYPE html>
<html>
	<head>
		<meta charset = "UTF-8" />
		<title>LedZone</title>
		<link rel = "stylesheet" type = "text/css" href = "css/venda.css" /><!--Aqui esta chamando o meu css-->
        <script type="text/javascript" src="slide_script.js"></script><!--Aqui esta chamando o script.js-->
	</head>
	<body>
		<div id = "wrapper">
		
			<div id = "header">
				<div id = "logo">		
					<img src = "Imagens/logo.png" class = "lg">
				</div><!--Fechamento da div logo-->
				<div id = "logar">
					<form name= "Logar" action="" method= 'POST'>
						<br>
						<b>Email:</b> <input type= "text" name= "email_cliente" size= '20' maxlength= '80'><br><br>
						<b>Senha:</b> <input type= "password" name= "senha_cliente" size= '20' maxlength= '80'>
						<input type= "submit" value= "Entrar"><br><br>
					</form>
					<a href="cadastro_cliente.php"><h3>Cadastra-se</h3></input></a>
				</div><!--Fechamento da div logar-->
			</div><!--Fechando div header-->
		
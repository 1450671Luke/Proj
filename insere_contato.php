<?php
	include "template/topo.php";
	$nm_cliente = $_POST['nome_cliente'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];
	if($con) {
		$sql = "insert into contato (nome_cliente, assunto, mensagem)".
			"values ('$nm_cliente', '$assunto', '$mensagem')";
		$rs = mysql_query($sql, $con);
		if ($rs) {
			echo '<script>alert("Sua mensagem foi enviada com sucesso");</script>';
			echo "<br><br><br>";
			echo "<center><h1>Navegue a vontade!<br> Aproveite nossos produtos!</h1></center>";
			echo'<figure><!--Aqui eu fiz o slide-->
					<span class="trs next"></span>
					<span class="trs prev"></span>
				<div id="slider">				
					<!-- Para alterar o tamanho das imagens, altere o width da imagem E TAMBÉM altere o CSS -->					
					<a href="#" class="trs"><img src="Imagens/img/slide1.jpg" alt="Promoção! Corra e garanta o seu." width = "940px"/></a>
					<a href="#" class="trs"><img src="Imagens/img/slide2.jpg" alt="Novos produtos em promoção." width = "940px"/></a>
					<a href="#" class="trs"><img src="Imagens/img/slide3.jpg" alt="Sua festa não sera mais a mesma." width = "940px"/></a>	
				</div><!--Fechamento da div slider-->			 
				<figcaption></figcaption>
				</figure>';
			#mysql_free_result($rs);
		}else {
			echo ("Erro de inclusão: ".mysql_error());
		}
	}else{
		echo ("Erro de conexão".mysql_error());
	}
	include "template/rodape.php";
?>
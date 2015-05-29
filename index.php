<?php
	include "template/topo.php";
?>
		<figure><!--Aqui eu fiz o slide-->
				<span class="trs next"></span>
				<span class="trs prev"></span>
			<div id="slider">				
				<!-- Para alterar o tamanho das imagens, altere o width da imagem E TAMBÉM altere o CSS -->					
				<a href="#" class="trs"><img src="Imagens/img/slide1.jpg" alt="Promoção! Corra e garanta o seu." width = "940px"/></a>
				<a href="#" class="trs"><img src="Imagens/img/slide2.jpg" alt="Novos produtos em promoção." width = "940px"/></a>
				<a href="#" class="trs"><img src="Imagens/img/slide3.jpg" alt="Sua festa não sera mais a mesma." width = "940px"/></a>	
			</div><!--Fechamento da div slider-->			 
			<figcaption></figcaption>
		</figure>
		<h1>Novos Produtos</h1>
<?php
	$sql = "select * from novo_produto limit 6;";
	$rs = mysql_query($sql,$con);
	
	while($produto = mysql_fetch_array($rs)){ ?>
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
					<form action = "" method="POST">
						<input type= "submit" name= "comprar" value= "Comprar">
					</form>
				</div><!--Fechamento da div produto1-->
		</div><!--Fechamento da div produto-->
			<?php
		}
	include "template/rodape.php";
?>
		
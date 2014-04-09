<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8" />
		<title></title>
		
		<link rel="stylesheet" href="css/estilo.css?v=1.0"/>
		<script src="js/jquery-2.1.0.min.js"></script>

		<!-- Skitter Styles -->
		<link href="js/skitter/css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
		
		<!-- Skitter JS -->
		
		<script type="text/javascript" language="javascript" src="js/skitter/js/jquery.easing.1.3.js"></script>
		<script type="text/javascript" language="javascript" src="js/skitter/js/jquery.animate-colors-min.js"></script>
		<script type="text/javascript" language="javascript" src="js/skitter/js/jquery.skitter.min.js"></script>
		
		<!-- Init Skitter -->
		<script type="text/javascript" language="javascript">
			$(document).ready(function() {
				$('.box_skitter_large').skitter({
					theme: 'default',
					numbers_align: 'center',
					progressbar: true, 
					labelAnimation: 'left', 
					dots: false, 
					preview: false
				});
				$('.resum').click(function(){
					$('.resum').css('height','60px');
					$(this).css('height','auto');
				});
				$('input').each(function(){
					$(this).attr('value',$(this).attr('data-campo'));
				});
				$('textarea').each(function(){
					$(this).text($(this).attr('data-campo'));
				});
				
				$('input')
				.focus(function(){
					if($(this).attr('value') === $(this).attr('data-campo')){$(this).attr('value','');}
				})
				.focusout(function(){
					if($(this).attr('value') === ''){
						$(this).attr('value',$(this).attr('data-campo'));
					}
				});
				
				$('textarea')
				.focus(function(){
					if($(this).val() === $(this).attr('data-campo')){$(this).val('');}
				})
				.focusout(function(){
					if($(this).val() === ''){$(this).val($(this).attr('data-campo'));}
				});
				
			});
		</script>
	</head>
	<body>
	
	<div id="conteudo">
		<div class="meio">
			<div id="topo">
				<div id="logo" class="fl"><img src="img/logocasacores.png" title="" alt=""/></div>
				<div id="fibox" class="fr">
					<div id="flag" class="fr tc"><h1>"inspirados pela natureza, orgulhosos por sermos brasileiros."</h1></div>
				</div>
			</div>
			
			<div id="menu" class="swboxnp mgb20">
				<ul>
					<li><a href="#">inicio</a></li>
					<li><a href="#">produtos e serviços</a></li>
					<li><a href="#">institucional</a></li>
					<li><a href="#">sustentavel</a></li>
					<li><a href="#">localização</a></li>
					<li><a href="#">contato</a></li>
					
				</ul>
			</div>
			
			<div class="box_skitter box_skitter_large mgb20">
				<ul>
					<li><a href="#cube"><img src="http://placehold.it/990x400" class="cube" /></a><div class="label_text"><p>cube</p></div></li>
					<li><a href="#cube"><img src="http://placehold.it/990x400" class="cube" /></a><div class="label_text"><p>cube</p></div></li>
					<li><a href="#cube"><img src="http://placehold.it/990x400" class="cube" /></a><div class="label_text"><p>cube</p></div></li>
					<li><a href="#cube"><img src="http://placehold.it/990x400" class="cube" /></a><div class="label_text"><p>cube</p></div></li>
					<li><a href="#cube"><img src="http://placehold.it/990x400" class="cube" /></a><div class="label_text"><p>cube</p></div></li>
				</ul>
			</div>
						
			<div class="boxes nosel">
				<div class="box mgb20 tc">
					<div>
						<h3 class="ttmai">institucional</h3>
						<p class="resum">Aqui o falamos um pouco sobre a empresa, seus objetivos, metas, visão. Sua colocação no mercado tambem é importante.</p>
					</div>
					<div>
						<h3 class="ttmai">produtos e serviços</h1>
						<p class="resum">Este é o local aonde podemos falar um pouco sobre a linha de produtos, serviços de forma resumidamente.</p>
					</div>
					<div>
						<h3 class="ttmai">sustentabilidade</h1>
						<p class="resum">Hoje em dia é importante uma empresa dar atenção ao lado sustentavel, quais os beneficios ecologicos dos produtos e serviços.</p>
					</div>
				</div>
				
				<div class="box3 tc mgb20">
					<div>
						<h3 class="ttmai">a fabrica</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, aut aut, cum a cupidatat cillum molestias officia, fugiat elit delectus placeat. doloribus tempora duis debitis cum quidem fugiat iusto officia nulla, incidunt voluptas nobis ad fuga quis anim voluptates. quis deleniti esse dignissimos excepturi saepe veniam nihil pariatur maiores officia duis quos. velit, alias illum eu incididunt debitis necessitatibus cupiditate aliquip.</p>
						<p>Saepe veniam iusto occaecat nisi asperiores distinctio laboris cumque est, ullam ducimus duis praesentium accusamus mollitia. Anim repellat irure illum magnam exercitationem occaecat minus rerum voluptates consequat suscipit minima eligendi maiores ea aliquip repellendus. Ut temporibus similique necessitatibus ex dolorum aut ea officia minus officiis iure reiciendis.</p>
						<p>Facilis dolor adipisicing dolore quis est. Ea enim consequat recusandae irure aliqua irure quibusdam non numquam aliquip fuga minima a cupidatat deserunt. Magna cillum suscipit aut eiusmod quas placeat cillum eum, quas assumenda. Animi possimus magna nostrud provident adipisicing et ducimus quis mollit dolorem occaecat facere laboriosam tempora vero. Optio, excepturi autem in, quo harum praesentium exercitation quo laboris eiusmod sunt in a aliqua.</p>
					</div>
				</div>
			
				<div class="box2 mgb20 tc">
					<div>
						<h3 class="ttmai">localização</h1>
						<p class="">Mapa para o cliente<br/><br/>
							<iframe width="390" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps?ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=60.676898,114.169922&amp;t=h&amp;z=4&amp;output=embed"></iframe><br /><small><a href="https://www.google.com/maps?ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=60.676898,114.169922&amp;t=h&amp;z=4&amp;source=embed" style="color:#0000FF;text-align:left">Exibir mapa ampliado</a></small>
						</p>
					</div>
					<div>
						<h3 class="ttmai">contato</h1>
						<p class="">
							Entre em contato conosco atraves do formulario abaixo. duvidas, sugestões, opiniões, são sempre bem vindas e respondidas o mais breve possivel.
							<form method="post">
								<input type="text" name="nome" value="" data-campo="nome"/>
								<input type="text" name="email" value="" data-campo="e-mail"/>
								<input type="text" name="telefone" value="" data-campo="telefone"/>
								<input type="text" name="cidade" value="" data-campo="cidade"/>
								<textarea rows="10"  cols="150" name="mensagem" data-campo="mensagem"></textarea>
								<input type="submit" name="cidade" value="enviar"/>
							</form>
						</p>
						<div class="social">
							<a href="http://facebook.com">facebook</a>
							<a href="http://youtube.com">youtube</a>
							<a href="http://plus.google.com">google plus</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
	
	<div id="rodape" class="swboxnp mgb20">
		<div class="meio">
			<div class="fl">todos os direitos reservados - 2014</div>
			<div class="fr">desenvolvedor</div>
		</div>
	</div>
	
	</body>
</html>

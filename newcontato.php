<?

//pega as variaveis por POST
$email   = $_POST["email"];


global $email; //função para validar a variável $email no script todo

$data      = date("d/m/y");                     //função para pegar a data de envio do e-mail
$ip        = $_SERVER['REMOTE_ADDR'];           //função para pegar o ip do usuário
$hora      = date("H:i");                       //para pegar a hora com a função date

//aqui envia o e-mail para você
mail ("cdione.dast@gmail.com",                       //email aonde o php vai enviar os dados do form
      "Dados para Novidades",
      "From: $email"
     );

//aqui são as configurações para enviar o e-mail para o visitante
$site   = "cartaolidersaude@gmail.com";                    //o e-mail que aparecerá na caixa postal do visitante
$titulo = "Obrigado";                  //titulo da mensagem enviada para o visitante
$msg    = "$nome, sempre que houver novidades você será informado.";

//aqui envia o e-mail de auto-resposta para o visitante
mail("$email",
     "From: $site"
    );
?>


<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Obrigado por se Cadastrar</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no"/>
	<link rel="stylesheet" href="style.css">
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.color.js"></script>
	<script src="js/custom.js"></script>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="js/jquery-easing-1.3.js" type="text/javascript"></script>
	<script src="js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#layerslider').layerSlider({
				autoStart : true,
				hoverPrevNext : false,
				animateFirstLayer	: false,
				thumbnailNavigation : false
			});
		});		
	</script>
</head>
<body>
<div id="wrapper">
	<header id="header" class="container-fluid">
	  <div class="header-bg">
		<div class="container">
			<div class="decoration dec-left visible-desktop"></div>
			<div class="decoration dec-right visible-desktop"></div>	  
			<div class="row">
				<div id="logo" class="span3"><a href="index.html"><img src="images/logo.png" alt="Cartão Líder"/></a></div>
				<div class="span9">
					<!-- Social Icons -->
					<ul class="social-icons">
						<li class="facebook"><a href="#">Facebook</a></li>
						<li class="twitter"><a href="#">Twitter</a></li>
						<li class="linkedin"><a href="#">LinkedIn</a></li>
						<li class="googleplus"><a href="#">GooglePlus</a></li>
						<li class="youtube"><a href="#">youtube</a></li>
						<li class="rss"><a href="#">Rss</a></li>
					</ul>	
					<!-- Contact Details -->
					<div class="contact-details visible-desktop">
						<ul>
							<li>Ligue pra gente: (xx37) 9902-7789</li>
							<li>Rua São Geraldo, 220 | Nova Serrana-MG <a href="mailto:cartaolidersaude@gmail.com">cartaolidersaude@gmail.com</a></li>
						</ul>
					</div>			
					<!-- Search Form -->
					<div class="search-form">
						<form method="get" action="#">
							<input type="text" value="Search" class="search-text-box"/>
							<input type="submit" value="" class="search-text-submit"/>
						</form>
					</div>		
				</div>	
			</div>
			<div class="row">
				<div class="span12">
					<div class="select-menu hidden-desktop">
						<select id="selectMenu">
							<option value="index.html">Home</option>						
							<option value="about.html">Quem somos</option>
                            <option value="perguntas.html">Perguntas</option>
                            <option value="construcao.html">Planos</option>
                            <option value="construcao.html">Guia de Descontos</option>						
							<option value="perguntas.html">Perguntas</option>					
							<option value="pessoas.html">Para Pessoas</option>
                            <option selected value="empresas.html">Para Empresas</option>								
							<option value="contato.html">Contato</option>
						</select>
					</div>
					<ul id="menu" class="visible-desktop">
						<li><a href="index.html">HOME</a></li>
						<li><a href="about.html">QUEM SOMOS</a></li>
                        <li><a href="construcao.html">PLANOS</a></li>
						<li><a href="perguntas.html">PERGUNTAS</a></li>
						<li>
							<a href="guia/index.php">GUIA DE DESCONTOS</a>
							<ul> 
								<li><a href="/guia/novaserrana.php">Nova Serrana</a></li>
								<li><a href="/guia/belohorizonte.php">Belo Horizonte</a></li>
								<li><a href="/guia/bomdespacho.php">Bom Despacho</a></li>
								<li><a href="/guia/divinopolis.php">Divinópolis</a></li>
								<li><a href="/guia/leandroferreira.php">Leandro Ferreira</a></li>
								<li><a href="/guia/parademinas.php">Pará de Minas</a></li>
                                <li><a href="/guia/perdigao.php">Perdigão</a></li>
                                <li><a href="/guia/pitangui.php">Pitangui</a></li>
							</ul>
						</li>
                        <li>
                        	<a href="credenciamento.html">ADQUIRA</a>
                            <ul>
                            	<li><a href="pessoas.html">Para Pessoas</a></li>
								<li><a href="empresas.html">Para Empresas</a></li>
                            </ul>
                        </li> 
						<li><a href="contato.html">CONTATO</a></li> 
					</ul>
				</div>
			</div>
			<div class="row visible-desktop">
				<div class="span12 main-slider"><!-- SLIDER --></div>
			</div>
		</div>
	  </div>
	</header>
	<section id="content" class="container-fluid">
	<div class="container">
		<div id="headline-page" class="hidden-phone hidden-tablet">
			<h1>Confirmação de envio</h1>
			<div id="crumbs"><a href="index.html">Home</a></div> 
		</div>
		<div class="row">
			<div class="span12 under-404">
				<h1>
					<?php echo "<p>Obrigado por se cadastrar!</p>";
					?>
                    </h1>

				<div class="row">
					<div class="span2 offset4"><a href="index.html" class="button under-page blue">Home</a></div>
					<div class="span2"><a href="contato.html" class="button under-page blue">Contato</a></div>
				</div>
			</div>
		</div>	
	</div>
	</section>
</div>

<footer id="footer" class="container-fluid">
	<div class="container">
		<section class="row">
			<article class="span3">
				<h3 class="title">Endereço</h3>
				<p>São Geraldo, 220 Centro</br>
                Nova Serrana - MG<br/> 
				Tel: (37) 9147-0289<br/>  
				Tel2: (37) 9902-7789</p>
				<div class="link">
					Website: <a href="http://cartaolidersaude.com">http://cartaolidersaude.com</a><br>
					Email: <a href="mailto:cartaolidersaudeo@gmail.com<">cartaolidersaudeo@gmail.com</a>				</div>
				<ul class="social-icons">
					<li class="facebook"><a href="#">Facebook</a></li>
					<li class="twitter"><a href="#">Twitter</a></li>
					<li class="linkedin"><a href="#">LinkedIn</a></li>
					<li class="googleplus"><a href="#">GooglePlus</a></li>
					<li class="youtube"><a href="#">youtube</a></li>
					<li class="rss"><a href="#">Rss</a></li>
				</ul>	
			</article>
			<article class="span3 navblock">
				<h3 class="title">Cidades</h3>
				<ul> 
					<li><a href="#">Nova Serrana</a></li>
					<li><a href="#">Pitangui</a></li>
					<li><a href="#">Divinópolis</a></li>
					<li><a href="#">Bom Despacho</a></li>
					<li><a href="#">Perdigão</a></li>
				</ul>
			</article>
			<article class="span3 navblock">
				<h3 class="title">Especialidades Médicas</h3>
				<ul> 
					<li><a href="#">Odontologia</a></li>
					<li><a href="#">Estética</a></li>
					<li><a href="#">Pediatria</a></li>
					<li><a href="#">Dermatologia </a></li>
					<li><a href="#">Outros</a></li>
				</ul>
			</article>
			<article class="span3">
				<img alt="" src="images/logofooter.png" class="slogo"/>
				<p>Nosso maior objetivo é dar oportunidade a todos de terem saúde preventiva e curativa e claro, para aqueles que se sentem capazes de desenvolver seus próprios empreendimentos. </p>
			</article>
	  </section>
		<div class="back-top up"><a href="#top"></a></div>
	</div>
</footer>
<footer class="footer-line container-fluid">
	<div class="container">
		<div class="row-fluid">
			<div class="span8 alignleft">Cartão Líder Saúde - A Serviço da sua Saúde | Powered by <a href="#">Ótima Design</a></div>
			<div class="span4 alignright hidden-phone"><a href="index.html">Home</a> | <a href="contato.html">Contato</a> | <a href="Blog_Large_Image.html">Novidades</a> | <a href="#top" class="top up">Top</a></div>
		</div>
	</div>
</footer>
</body>
</html>
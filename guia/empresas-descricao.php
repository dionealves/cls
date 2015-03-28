<?

include('admin/config/conexao.php'); 
?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Cartão Líder Sáude - A serviço de sua saúde</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no"/>
	<link rel="stylesheet" href="../style.css">
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/jquery.color.js"></script>
	<script src="../js/custom.js"></script>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="../js/jquery-easing-1.3.js" type="text/javascript"></script>
	<script src="../js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
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
				<div id="logo" class="span3"><a href="index.html"><img src="../images/logo.png" alt="Cartao Líder"/></a></div>
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
		
				</div>	
			</div>
			<div class="row">
				<div class="span12">
					<div class="select-menu hidden-desktop">
						<select id="selectMenu">
							<option value="../index.html">Home</option>						
							<option value="../about.html">Quem somos</option>
                            <option value="../perguntas.html">Perguntas</option>
                            <option value="../construcao.html">Planos</option>
                            <option selected value="index.php">Guia de Descontos</option>						
							<option value="../perguntas.html">Perguntas</option>					
							<option value="../pessoas.html">Para Pessoas</option>
                            <option value="../empresas.html">Para Empresas</option>								
							<option value="../contato.html">Contato</option>
						</select>
					</div>
					<ul id="menu" class="visible-desktop">
						<li><a href="../index.html">HOME</a></li>
						<li><a href="../about.html">QUEM SOMOS</a></li>
                        <li><a href="../construcao.html">PLANOS</a></li>
						<li><a href="../perguntas.html">PERGUNTAS</a></li>
						<li>
							<a href="/guia/index.php">GUIA DE DESCONTOS</a>
							<ul> 
								<li><a href="novaserrana.php">Nova Serrana</a></li>
								<li><a href="construcao.html">Pitangui</a></li>
								<li><a href="construcao.html">Divinópolis</a></li>
								<li><a href="construcao.html">Bom Despacho</a></li>
								<li><a href="construcao.html">Perdigão</a></li>
								<li><a href="construcao.html">Belo Horizonte</a></li>
							</ul>
						</li>
                        <li>
                        	<a href="../credenciamento.html">ADQUIRA</a>
                            <ul>
                            	<li><a href="../pessoas.html">Para Pessoas</a></li>
								<li><a href="../empresas.html">Para Empresas</a></li>
                            </ul>
                        </li> 
						<li><a href="../contato.html">CONTATO</a></li> 
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
			<h1>Guia de Descontos</h1>
			<div id="crumbs"><a href="index.html">Home</a> / <a href="guia.html" class="active">Guia de Descontos</a></div> 
		</div>
		<div class="row">
			<div class="span4">
				<ul class="navigation"> 
					<li><a href="novaserrana.php">Nova Serrana</a></li>
					<li><a href="construcao.html">Pitangui</a></li>
					<li><a href="construcao.html">Divinópolis</a></li>
					<li><a href="construcao.html">Bom Despacho</a></li>
					<li><a href="construcao.html">Perdigão</a></li>
					<li><a href="construcao.html">Belo Horizonte</a></li>
				</ul>
			</div>
			<div class="span8">
            <?
                        
                        $id_empresa = $_GET['id_empresa'];
                        $query_empresas = "select * from tbl_empresas where id_empresa = '$id_empresa' AND status = '1'";
                        $rs_empresas    = mysql_query($query_empresas);
                        
                        $campo_empresas = mysql_fetch_array($rs_empresas);
                        
                        $id_empresa        = $campo_empresas['id_empresa'];
                        $data_empresa      = $campo_empresas['data'];
                        $titulo_empresa    = $campo_empresas['titulo'];
                        $descricao_empresa = $campo_empresas['descricao'];
                        $texto_empresa     = $campo_empresas['msg'];
                        $fonte_empresa     = $campo_empresas['legenda'];
                        $imagem_empresa     = $campo_empresas['nome_arquivo'];
                        
                        ?>          
				<div class="title"><h2><?= $titulo_empresa; ?></h2></div>
				<p><?= $texto_empresa; ?></p>
                <div class="row">
                	<div class="span4">
                    	<div class="thumbnail"><? if ($imagem_empresa){ echo "<img src='imagens/empresas/$imagem_empresa'>"; } ?></div>
                	</div>
                    <div class="span4">
                    	<blockquote><?= $descricao_empresa; ?></blockquote>
                	</div>
                </div>
				<div class="title"><h2>Por que escolher a Cartão Líder?</h2></div>
				<div class="accordion" id="accordion">
				  <div class="accordion-group">
					<div class="accordion-heading">
					  <a class="accordion-toggle target" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
						Cuidados com sua saúde
					  </a>
					</div>
					<div id="collapseOne" class="accordion-body collapse in">
					  <div class="accordion-inner">
						Em Parceria com nossas clínicas e centros credenciados, você usuário do Carto Líder pode realizar qualquer exame que o seu médico exigir, tudo com conforto e comodidade.
					  </div>
					</div>
				  </div>
				  <div class="accordion-group">
					<div class="accordion-heading">
					  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
						Diferencial
					  </a>
					</div>
					<div id="collapseTwo" class="accordion-body collapse">
					  <div class="accordion-inner">
						O nosso diferencial das outras empresas é que o nosso cartão não é somente voltado para a área da saúde. Você pode utiliza-lo em vários estabelecimentos no seu dia-a-dia. 
					  </div>
					</div>
				  </div>
				  <div class="accordion-group">
					<div class="accordion-heading">
					  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
						Menor preço do mercado
					  </a>
					</div>
					<div id="collapseThree" class="accordion-body collapse">
					  <div class="accordion-inner">
						Apesar da nossa grande variedade de serviços, o Cartão Líder não pesa em seu bolso. <div align="center"><p><a href="construcao.html" class="button small blue">Conheça a nossa tabela de Planos.</a></p></div>
					  </div>
					</div>
				  </div>			  
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
				<img alt="" src="../images/logofooter.png" class="slogo"/>
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
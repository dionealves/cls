<?
session_start();
if (empty($_SESSION['usuario_id'])){
 echo "Acesso negado!";
 exit;
}else{
include('config/conexao.php');

$usuario_id   = $_SESSION['usuario_id'];
$usuario_nome = $_SESSION['usuario_nome'];
}
?>
<? 
// PEGA OS DADOS DO USUÁRIO

$query = "SELECT * FROM tbl_usuarios where id = '$usuario_id'";
    $resultado = mysql_query ($query);
	$campo = mysql_fetch_array ($resultado);   
	$usuario_nome = $campo ['nome'];  

?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<title>Pagina de configuração - CLS</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no"/>
	<link rel="stylesheet" href="../../style.css">
	<link rel="icon" href="../../favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="../../favicon.ico" type="image/x-icon"/>
	<script src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
	<script src="../../js/jquery.color.js"></script>
	<script src="../../js/custom.js"></script>
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="../../js/jquery-easing-1.3.js" type="text/javascript"></script>
	<script src="../../js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
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
<script language="javascript" type="text/javascript" src="javascript.js"></script>

<SCRIPT src="javascript/jscripts.js"></SCRIPT>

<script type="text/javascript">
   _editor_url = "htmlarea/";
   _editor_lang = "en";
</script>
<script type="text/javascript" src="htmlarea.js"></script>
<script language="JavaScript"> 
	function Abrir_Pagina(URL,Configuracao) {
	  window.open(URL,'',Configuracao);      
	} 
</script>
</head>
<body onLoad="HTMLArea.replaceAll()">
<div id="wrapper">
	<header id="header" class="container-fluid">
	  <div class="header-bg">
		<div class="container">
			<div class="decoration dec-left visible-desktop"></div>
			<div class="decoration dec-right visible-desktop"></div>	  
			<div class="row">
				<div id="logo" class="span3"><a href="index.html"><img src="../../images/logo.png" alt="Cartao Líder"/></a></div>
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
							<option value="../../index.html">Home</option>						
							<option value="../../about.html">Quem somos</option>
                            <option value="../../perguntas.html">Perguntas</option>
                            <option value="../../construcao.html">Planos</option>
                            <option value="../../guia.html">Guia de Descontos</option>						
							<option value="../../perguntas.html">Perguntas</option>					
							<option value="../../pessoas.html">Para Pessoas</option>
                            <option value="../../empresas.html">Para Empresas</option>								
							<option value="../../contato.html">Contato</option>
						</select>
					</div>
					<ul id="menu" class="visible-desktop">
						<li><a href="../../index.html">HOME</a></li>
						<li><a href="../../about.html">QUEM SOMOS</a></li>
                        <li><a href="../../construcao.html">PLANOS</a></li>
						<li><a href="../../perguntas.html">PERGUNTAS</a></li>
						<li>
							<a href="../../construcao.html">GUIA DE DESCONTOS</a>
							<ul> 
								<li><a href="../../construcao.html">Nova Serrana</a></li>
								<li><a href="../../construcao.html">Pitangui</a></li>
								<li><a href="../../construcao.html">Divinópolis</a></li>
								<li><a href="../../construcao.html">Bom Despacho</a></li>
								<li><a href="../../construcao.html">Perdigão</a></li>
								<li><a href="../../construcao.html">Belo Horizonte</a></li>
							</ul>
						</li>
                        <li>
                        	<a href="../../credenciamento.html">ADQUIRA</a>
                            <ul>
                            	<li><a href="../../pessoas.html">Para Pessoas</a></li>
								<li><a href="../../empresas.html">Para Empresas</a></li>
                            </ul>
                        </li> 
						<li><a href="../../contato.html">CONTATO</a></li> 
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
			<h1>Listar Empresas</h1>
			<div id="crumbs"><a href="index.html">Home</a> / <a href="principal.php">Painel de Configuração</a> / <a href="#" class="active">Listar Empresas</a></div> 
		</div>
		<div class="row">

			<div class="span4">
				<ul class="navigation"> 
					<li><a href="empresas_cadastrar.php">Cadastrar</a></li>
					<li class="active"><a href="empresas_listar.php">Listar empresas Cadastradas</a></li>
					<li><a href="empresas_categoria_cadastrar.php">Cadastrar Categoria</a></li>
					<li><a href="empresas_categoria_listar.php">Listar Categorias</a></li>
					<li><a href="empresas_cidade_cadastrar.php">Cadastrar Cidades</a></li>
					<li><a href="empresas_cidade_listar.php">Listar Cidades</a></li>
                    <li><a href="logout.php">Sair</A></li>
				</ul>
			</div>
			<div class="span8">
				<div class="title"><h2>Lista de Empresas do guia</h2></div>
				<p>Relatorio de todas as empresas cadastradas</p>
                <table width="100%" class="table table-bordered table-hover">
                                                                          <?
$query = "select * from tbl_empresas order by id_empresa desc";
$rs = mysql_query($query);
?>
  <tr>
    <td colspan="5" align="center"><div align="center"><b>Listar Epresas</b></div></td>
    </tr>
  <tr>
    <td width="25%"><b>Título</b></td>
    <td width="45%"><b>Descrição</b></td>
    <td width="10%"><b>Visualizar</b></td>
    <td width="10%"><b>Editar</b></td>
    <td width="10%"><b>Excluir</b></td>
  </tr>
<? 
while($row = mysql_fetch_array($rs)){
  ?>
  <tr>
    <td width="25%"><?= $row["titulo"] ?></td>
    
    <td width="45%"><?= $row["descricao"] ?></td>
    
    <td width="10%"><div align="center"><a href="javascript:Abrir_Pagina('empresas_visualizar.php?id_empresa=<?= $row["id_empresa"] ?>','scrollbars=yes,width=700,height=800')"><img src="imagens/ed_preview.gif" width="16" height="14" border="0"></a></div></td>
    
    <td width="10%"><div align="center"><a href="empresas_alterar.php?id_empresa=<?= $row["id_empresa"] ?>"><img src="imagens/ed_refresh.gif" width="16" height="16" border="0"></a></div></td>
    
    <td width="10%"><div align="center"><a href="script_empresas.php?acao=excluir&id_empresa=<?= $row["id_empresa"] ?>"><img src="imagens/ed_delete.gif" width="18" height="17" border="0"></a></div></td>
  </tr>
  <?} ?>
</table>

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
				<img alt="" src="../../images/logofooter.png" class="slogo"/>
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
			<div class="span4 alignright hidden-phone"><a href="../../index.html">Home</a> | <a href="../../contato.html">Contato</a> | <a href="../../guia.html">Guia</a> | <a href="#top" class="top up">Top</a></div>
		</div>
	</div>
</footer>
</body>
</html>
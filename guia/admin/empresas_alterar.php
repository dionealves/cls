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

<script type="text/javascript">

   _editor_url = "htmlarea/";

   _editor_lang = "en";

</script>

<script type="text/javascript" src="htmlarea.js"></script>    

<SCRIPT src="javascript/jscripts.js"></SCRIPT>



<SCRIPT language=JavaScript type=text/JavaScript>

<!--

function MM_jumpMenu(targ,selObj,restore){ //v3.0

  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");

  if (restore) selObj.selectedIndex=0;

}

//-->

</SCRIPT>



<SCRIPT src="imagens/extranet/jscripts.js"></SCRIPT>
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
			<h1>Editar Empresas</h1>
			<div id="crumbs"><a href="index.html">Home</a> / <a href="principal.php">Painel de Configuração</a> / <a href="#" class="active">Editar Empresas</a></div> 
		</div>
		<div class="row">

			<div class="span4">
				<ul class="navigation"> 
					<li><a href="empresas_cadastrar.php">Cadastrar</a></li>
					<li><a href="empresas_listar.php">Listar empresas Cadastradas</a></li>
                    <li class="active"><a href="#">Editar empresas Cadastradas</a></li>
					<li><a href="empresas_categoria_cadastrar.php">Cadastrar Categoria</a></li>
					<li><a href="empresas_categoria_listar.php">Listar Categorias</a></li>
					<li><a href="empresas_cidade_cadastrar.php">Cadastrar Cidades</a></li>
					<li><a href="empresas_cidade_listar.php">Listar Cidades</a></li>
                    <li><a href="logout.php">Sair</A></li>
				</ul>
			</div>
			<div class="span8">
				<div class="title"><h2>Edição de dados do guia</h2></div>
				<p><strong>Atenção Cássio</strong>, efetue abaixo a edição dos dados da empresa:</p>
                <form action="script_empresas.php?acao=editar" Method="post" enctype="multipart/form-data">
                <?

$id_empresa = $_GET['id_empresa'];
$query = "select * from tbl_empresas where id_empresa = '$id_empresa'";

$resultado = mysql_query($query);
$row = mysql_fetch_array($resultado);
$id_categoria_empresa         = $row['id_categoria_empresa'];
$titulo_empresa               = $row['titulo'];
$descricao                    = $row['descricao'];
$destaque                     = $row['destaque'];
$fotografo                    = $row['fotografo'];
$id_cidade_empresa            = $row['id_cidade_empresa'];
$msg                          = $row['msg'];
$nome_arquivo                 = $row['nome_arquivo'];
$data                         = $row['data'];
$status                       = $row['status'];

?>
                <div class="row">
					<div class="span4">
						<div class="form-padding">
							<label for="nome">Nome:</label>
							<input type="text" name="nome" id="nome" class="form-text" value="<?= $titulo_empresa; ?>"/>
						</div>
					</div>
                    <div class="span4">
						<div class="form-padding">
							<label for="descricao">Descrição:</label>
							<input type="text" required name="email" id="descricao" class="form-text" value="<?= $descricao; ?>"/>
						</div>
					</div>
                    <div class="span4">
						<div class="form-padding">
							<label for="id_categoria_empresa">Categoria:</label>
							<select name='id_categoria_empresa' id='id_categoria_empresa'>
                            	<option selected>Selecione a Categoria</option>
<?

$query1 = "select * from tbl_categorias_empresas where id_categoria_empresa = '$id_categoria_empresa'";
$rs1    = mysql_query($query1);
$row1 = mysql_fetch_array($rs1);
$id_categoria_empresa1  = $row1['id_categoria_empresa'];
$categoria_empresa1     = $row1['categoria'];

   ?>
                                              <option value="<?= $id_categoria_empresa1; ?>" selected> 
                                              <?= $categoria_empresa1; ?>
                                              </option>
                                              <?

$query2 = "select * from tbl_categorias_empresas order by id_categoria_empresa";
$rs2    = mysql_query($query2);
while($row2 = mysql_fetch_array($rs2)){
$id_categoria_empresa2         = $row2['id_categoria_empresa'];
$categoria_empresa2            = $row2['categoria'];

   ?>
                                              <? if ($categoria_empresa2 != $categoria_empresa1){?>
                                              <option value="<?echo $id_categoria_empresa2; ?>"> 
                                              <?= $categoria_empresa2; ?>
                                              </option>
                                              <?}?>
                                              <?}?>
                                            </select>
                                
						</div>
                    </div>
                    
                    <div class="span4">
						<div class="form-padding">
							<label for="destaque">Destaque:</label>
							 <select name='destaque' id='destaque'>
                                              <? if ($destaque != '1'){echo "<option value='0' selected>Não</option><option value='1'>Sim</option>";} 
											   else{echo "<option value='1' selected>Sim</option><option value='0'>Não</option>";} ?>
                                            </select>
						</div>
					</div>
					<div class="span8">
						<div class="form-padding">
							<label for="msg">Texto:</label>
							<?/*
	                        <script language="JavaScript1.2" defer>                    
				       		var config = new Object(); // create new config object 
							config.bodyStyle = 'font-family: "Times New Roman";';  
							editor_generate('msg', config);                        
							</script>*/ ?>
                            <script language="JavaScript1.2" defer>
							editor_generate('msg');
							</script>
                            <textarea name="msg" id="msg" cols="65" rows="15"><?= $msg; ?></textarea>
						</div>
					</div>
                    <div class="span4">
						<div class="form-padding">
							<label for="status">Ativo:</label>
							 <select name='status' id='status'>
                                 <? if ($status != '1'){echo "<option value='0' selected>Não</option><option value='1'>Sim</option>";} 
									else{echo "<option value='1' selected>Sim</option><option value='0'>Não</option>";} ?>
                             </select>
						</div>
					</div>
                    <div class="span4">
						<div class="form-padding">
							<label for="nome_arquivo">Imagem:</label>
							<input type="file" name="nome_arquivo" id="nome_arquivo" value=""/>
						</div>
					</div>
                    <div class="span4">
						<div class="form-padding">
							<label for="id_cidade_empresa">Cidade:</label>
							<select name='id_cidade_empresa' id='id_cidade_empresa'>
                                              <?

$query1 = "select * from tbl_cidades_empresas where id_cidade_empresa = '$id_cidade_empresa'";
$rs1    = mysql_query($query1);
$row1 = mysql_fetch_array($rs1);
$id_cidade_empresa1  = $row1['id_cidade_empresa'];
$cidade_empresa1     = $row1['cidade'];

   ?>
                                              <option value="<?= $id_cidade_empresa1; ?>" selected> 
                                              <?= $cidade_empresa1; ?>
                                              </option>
                                              <?

$query2 = "select * from tbl_cidades_empresas order by id_cidade_empresa";
$rs2    = mysql_query($query2);
while($row2 = mysql_fetch_array($rs2)){
$id_cidade_empresa2         = $row2['id_cidade_empresa'];
$cidade_empresa2            = $row2['cidade'];

   ?>
                                              <? if ($cidade_empresa2 != $cidade_empresa1){?>
                                              <option value="<?echo $id_cidade_empresa2; ?>"> 
                                              <?= $cidade_empresa2; ?>
                                              </option>
                                              <?}?>
                                              <?}?>
                                            </select>
                                
						</div>
                    </div>
            	</div>		
				<div class="row">
                	<div class="span8">
                		<div class="form-padding"> 
							<input type="submit" class="button blue medium" value="Salvar"/>
                    	</div>	
                	</div>	
				</div>
                <input name="id_guia" type="hidden" value="<?= $id_empresa; ?>">
                </form>
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
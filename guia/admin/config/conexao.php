<?
   
$database="sql5c75a.carrierzone.com"; // SERVIDOR E PORTA UTILIZADA   
$dbname="guia_cartaolidersaude_com"; // BASE DE DADOS 
$usuario="cartaolide733508"; // USUÁRIO DO MYSQL
$dbsenha="dat2kp16"; // SENHA DO MYSQL

$conexao=mysql_connect ($database, $usuario, $dbsenha);
if($conexao){
      if (mysql_select_db($dbname, $conexao)){ print "";
      }else{ print "Não foi possível selecionar o Banco de Dados"; }
}else{ print "Erro ao conectar o MySQL"; }


$sql = "CREATE TABLE IF NOT EXISTS `tbl_categorias_empresas` (
  `id_categoria_empresa` tinyint(3) unsigned NOT NULL auto_increment,
  `categoria` varchar(50) default NULL,
  PRIMARY KEY  (`id_categoria_empresa`)
);";
mysql_query($sql);

$sql = "CREATE TABLE IF NOT EXISTS `tbl_cidades_empresas` (
  `id_cidade_empresa` tinyint(3) unsigned NOT NULL auto_increment,
  `cidade` varchar(50) default NULL,
  PRIMARY KEY  (`id_cidade_empresa`)
);";
mysql_query($sql);

$sql = "CREATE TABLE  IF NOT EXISTS `tbl_empresas` (
  `id_empresa` int(11) NOT NULL auto_increment,
  `id_categoria_empresa` tinyint(4) NOT NULL default '0',
  `titulo` varchar(100) NOT NULL default '',
  `descricao` varchar(255) NOT NULL default '',
  `destaque` char(3) NOT NULL default '',
  `fotografo` varchar(100) NOT NULL default '',
  `id_cidade_empresa` tinyint(4) NOT NULL default '0',
  `msg` text NOT NULL,
  `nome_arquivo` varchar(100) NOT NULL default '',
  `data` varchar(15) NOT NULL default '',
  `status` tinyint(3) NOT NULL default '0',
  PRIMARY KEY  (`id_empresa`)
);";
mysql_query($sql);

$sql = "CREATE TABLE IF NOT EXISTS `tbl_usuarios` (
  `id` int(11) NOT NULL auto_increment,
  `nome` varchar(150) NOT NULL default '',
  `email` varchar(150) NOT NULL default '',
  `senha` varchar(50) NOT NULL default '',
  `status` varchar(10) NOT NULL default '',
  PRIMARY KEY  (`id`)
)";
mysql_query($sql);

mysql_query("INSERT INTO tbl_usuarios (id, nome, email, senha, status) VALUES ('0','Administrador','cartaolidersaude@gmail.com','saudelider','1')");

?>

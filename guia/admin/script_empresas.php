<?
session_start();
if (empty($_SESSION['usuario_id'])) {
 echo "Acesso negado!";
 exit;
}else{
include('config/conexao.php');

$usuario_id   = $_SESSION['usuario_id'];
$usuario_nome = $_SESSION['usuario_nome'];
}
?>
<? 
// PEGA OS DADOS DO USU�RIO

$query = "SELECT * FROM tbl_usuarios where id = '$usuario_id'";
    $resultado = mysql_query ($query);
	$campo = mysql_fetch_array ($resultado);   
	$usuario_nome = $campo ['nome'];  

?>

<?

$acao = $_GET['acao'];

switch ($acao) {

case cadastrar_categoria:

$categoria = $_POST['categoria'];

$query = "insert into tbl_categorias_empresas(categoria) values ('$categoria')";
$rs= mysql_query($query);

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("GUIA\n cadastro de categoria efetuado com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="empresas_categoria_listar.php";</SCRIPT>

<?

break;

case cadastrar_cidade:

$cidade = $_POST['cidade'];

$query = "insert into tbl_cidades_empresas(cidade) values ('$cidade')";
$rs= mysql_query($query);

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("GUIA\n cadastro de cidade efetuado com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="empresas_cidade_listar.php";</SCRIPT>

<?

break;

case cadastrar:

function trocar_acentos ($nome_arquivo)
{
		$nome_arquivo = str_replace(' ','_',$nome_arquivo);
		$nome_arquivo = str_replace('�','a',$nome_arquivo);
		$nome_arquivo = str_replace('�','a',$nome_arquivo);
		$nome_arquivo = str_replace('�','e',$nome_arquivo);
		$nome_arquivo = str_replace('�','e',$nome_arquivo);
		$nome_arquivo = str_replace('�','i',$nome_arquivo);
		$nome_arquivo = str_replace('�','i',$nome_arquivo);
		$nome_arquivo = str_replace('�','o',$nome_arquivo);
		$nome_arquivo = str_replace('�','o',$nome_arquivo);
		$nome_arquivo = str_replace('�','u',$nome_arquivo);
		$nome_arquivo = str_replace('�','u',$nome_arquivo);
		$nome_arquivo = strtolower($nome_arquivo);

		return $nome_arquivo;
}



$nome_arquivo = trocar_acentos ($HTTP_POST_FILES['nome_arquivo']['name']);
$nome_arquivo_extensao = substr($nome_arquivo,strpos($nome_arquivo,'.')+1,strlen($nome_arquivo)-strpos($nome_arquivo,'.'));
$nome_arquivo_tamanho = $HTTP_POST_FILES['nome_arquivo']['size'];
$nome_arquivo_descricao = $_POST['nome_arquivo_descricao'];
$nome_arquivo_data = date('d/m/Y');


		$uploaddir = "../imagens/empresas/";
		$data = mktime();

        if ($nome_arquivo != ""){
		if (file_exists($uploaddir.$nome_arquivo))
		{
			$nome_arquivo = mktime()."_".$nome_arquivo;
		}
		}



           move_uploaded_file($HTTP_POST_FILES['nome_arquivo']['tmp_name'], $uploaddir . $nome_arquivo);

$id_categoria_empresa    = $HTTP_POST_VARS['id_categoria_empresa'];
$titulo                  = $HTTP_POST_VARS['titulo'];
$descricao               = $HTTP_POST_VARS['descricao'];
$destaque                = $HTTP_POST_VARS['destaque'];
$fotografo               = $HTTP_POST_VARS['fotografo'];
$id_cidade_empresa       = $HTTP_POST_VARS['id_cidade_empresa'];
$status                  = $HTTP_POST_VARS['status'];

$msg                     = $HTTP_POST_VARS['msg'];
$msg                     = ereg_replace("\n","<br>",$msg);
$data_publicacao         = date("d/m/Y");

$query = "insert into tbl_empresas(id_categoria_empresa, titulo, descricao, destaque, fotografo, id_cidade_empresa, msg, nome_arquivo, data, status) values ('$id_categoria_empresa', '$titulo', '$descricao', '$destaque', '$fotografo', '$id_cidade_empresa', '$msg', '$nome_arquivo', '$data_publicacao', '$status')";
$rs= mysql_query($query);

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("GUIA\n empresa cadastrada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="empresas_listar.php";</SCRIPT>

<?

break;



case editar_categoria:

$id_categoria_empresa = $_POST['id_categoria_empresa'];
$categoria             = $_POST['categoria'];

$query2 = "update tbl_categorias_empresas SET categoria = '$categoria' where id_categoria_empresa = '$id_categoria_empresa'";
$rs= mysql_query($query2);


?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("GUIA\n edi��o de categoria efetuada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="empresas_categoria_listar.php";</SCRIPT>

<?

break;


case editar_cidade:

$id_cidade_empresa = $_POST['id_cidade_empresa'];
$cidade             = $_POST['cidade'];

$query2 = "update tbl_cidades_empresas SET cidade = '$cidade' where id_cidade_empresa = '$id_cidade_empresa'";
$rs= mysql_query($query2);


?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("GUIA\n edi��o de cidade efetuada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="empresas_cidade_listar.php";</SCRIPT>

<?

break;



case editar:

$id_empresa           = $HTTP_POST_VARS['id_empresa'];
$id_categoria_empresa = $HTTP_POST_VARS['id_categoria_empresa'];
$titulo_empresa       = $HTTP_POST_VARS['titulo_empresa'];
$descricao            = $HTTP_POST_VARS['descricao'];
$destaque             = $HTTP_POST_VARS['destaque'];
$fotografo            = $HTTP_POST_VARS['fotografo'];
$id_cidade_empresa    = $HTTP_POST_VARS['id_caidade_empresa'];
$msg                  = $HTTP_POST_VARS['msg'];
$msg                  = ereg_replace("\n","<br>",$msg);
$data                 = $HTTP_POST_VARS['data'];
$status               = $HTTP_POST_VARS['status'];
//$nome_arquivo         = $HTTP_POST_FILES['nome_arquivo'];


$nome_arquivo_file = $_FILES['nome_arquivo'];
$contar = count($nome_arquivo_file['name']);
$ok = 0;
$erro = 0;
for($i = 0; $i < $contar; $i++){
$nome_arquivo = $nome_arquivo_file['name'][$i];
$tmp = $nome_arquivo_file['tmp_name'][$i];
if(!empty($nome_arquivo)){




        function trocar_acentos2 ($nome_arquivo){
		$nome_arquivo = str_replace(' ','_',$nome_arquivo);
		$nome_arquivo = str_replace('�','a',$nome_arquivo);
		$nome_arquivo = str_replace('�','a',$nome_arquivo);
		$nome_arquivo = str_replace('�','e',$nome_arquivo);
		$nome_arquivo = str_replace('�','e',$nome_arquivo);
		$nome_arquivo = str_replace('�','i',$nome_arquivo);
		$nome_arquivo = str_replace('�','i',$nome_arquivo);
		$nome_arquivo = str_replace('�','o',$nome_arquivo);
		$nome_arquivo = str_replace('�','o',$nome_arquivo);
		$nome_arquivo = str_replace('�','o',$nome_arquivo);
        $nome_arquivo = str_replace('�','o',$nome_arquivo);
		$nome_arquivo = str_replace('�','u',$nome_arquivo);
		$nome_arquivo = str_replace('�','u',$nome_arquivo);
		$nome_arquivo = strtolower($nome_arquivo);

		return $nome_arquivo;
		}



        $nome_arquivo = trocar_acentos2 ($HTTP_POST_FILES['nome_arquivo']['name']);
        $nome_arquivo_extensao = substr($nome_arquivo,strpos($nome_arquivo,'.')+1,strlen($nome_arquivo)-strpos($nome_arquivo,'.'));
        $nome_arquivo_tamanho = $HTTP_POST_FILES['nome_arquivo']['size'];
        $nome_arquivo_descricao = $_POST['nome_arquivo_descricao'];
        $nome_arquivo_data = date('d/m/Y');

		$querydel = "select * from tbl_empresas where id_empresa='$id_empresa'";
        $rsdel = mysql_query ($querydel);

        $campodel = mysql_fetch_array($rsdel);
        $nome_arquivo_antigo = $campodel['nome_arquivo'];

        if ($rsdel){
        $uploaddir_antigo = "../imagens/empresas/";

    	if ($nome_arquivo_antigo != ""){
    	if (file_exists($uploaddir_antigo.$nome_arquivo_antigo)){
        unlink ($uploaddir_antigo.$nome_arquivo_antigo);
        }
        }
        }

         copy($_FILES['nome_arquivo']['tmp_name'], $uploaddir_antigo . $nome_arquivo);
         $query = "update tbl_empresas SET nome_arquivo = '$nome_arquivo' where id_empresa='$id_empresa'";
         $rs= mysql_query ($query);
        }
}
        
$data = date('d/m/Y');

$query2 = "update tbl_empresas SET
           id_categoria_empresa = '$id_categoria_empresa',
           titulo               = '$titulo_empresa',
           descricao            = '$descricao',
           destaque             = '$destaque',
           fotografo            = '$fotografo',
           id_cidade_empresa    = '$id_cidade_empresa',
           msg                  = '$msg',
           data                 = '$data',
           status               = '$status'
           
           where id_empresa='$id_empresa'";
           
$rs2    = mysql_query($query2);

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("GUIA\n edi��o de empresa efetuada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="empresas_listar.php";</SCRIPT>

<?


break;

case excluir_categoria:
$id_categoria_empresa = $_GET['id_categoria_empresa'];

$query="DELETE from tbl_categorias_empresas where id_categoria_empresa ='$id_categoria_empresa'";
$rs= mysql_query($query);

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("GUIA\n exclus�o de categoria efetuada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="empresas_categoria_listar.php";</SCRIPT>

<?

break;


case excluir_cidade:
$id_cidade_empresa = $_GET['id_cidade_empresa'];

$query="DELETE from tbl_cidades_empresas where id_cidade_empresa ='$id_cidade_empresa'";
$rs= mysql_query($query);

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("GUIA\n exclus�o de cidade efetuada com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="empresas_cidade_listar.php";</SCRIPT>

<?

break;


case excluir:

$id_empresa = $_GET['id_empresa'];

$query="select * from tbl_empresas where id_empresa ='$id_empresa'";
$rs = mysql_query($query);
while($row = mysql_fetch_array($rs)){
$nome_arquivo = $row[nome_arquivo];
}

$query2 = "delete from tbl_empresas where id_empresa = '$id_empresa'";
$rs    = mysql_query($query2);

if ($rs){
	$uploaddir = "../imagens/empresas/";

	if ($nome_arquivo != "") {unlink ($uploaddir.$nome_arquivo);}

?>

<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript"> alert ("GUIA\n empresa exclu�da com sucesso")</SCRIPT>
<SCRIPT language="JavaScript">window.location.href="empresas_listar.php";</SCRIPT>

<?
     
}
break;
}

?>

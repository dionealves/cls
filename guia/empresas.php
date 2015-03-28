<? include('admin/config/conexao.php'); ?>
<html>
<head>
<title>.:: WEBMASTER.PT :: SISTEMA DE NOTÍCIAS ::.</title>
</head>
<BODY>

<FIELDSET class=verdana_azul style="WIDTH: 96%"><LEGEND><STRONG>Notícias&nbsp;</STRONG></LEGEND>
    <TABLE class=texto cellSpacing=0 cellPadding=5 width="100%" border=0>
        <TBODY>
            <TR>
                <TD>
                    <TABLE class=arial_preto cellSpacing=0 cellPadding=15 width="100%" border=0>
                        <TBODY>
                            <TR>
                                <TD>ÚLTIMAS 50 NOTÍCIAS CADASTRADAS<BR>
                                    <TABLE class=arial_preto cellSpacing=4 cellPadding=3 width='100%' align=center border=0>
                                        <TBODY>
                                            <?
                                            
                                            $query_empresas = "select * from tbl_empresas where status = '1' limit 50";
                                            $rs_empresas    = mysql_query($query_empresas);
                                            
                                            while($campo_empresas = mysql_fetch_array($rs_empresas)){
                                            
                                            $id_empresa        = $campo_empresas['id_empresa'];
                                            $data_empresa      = $campo_empresas['data'];
                                            $descricao_empresa = $campo_empresas['descricao'];
                                            
                                            ?>
                                            
                                            <TR>
                                                <TD vAlign=top align=left colSpan=2><B><IMG height=7 src="imagens/seta_laranja.gif" width=7> <?= $data_empresa;?></B> <A title='<?= $descricao_empresa; ?>' href='empresas-descricao.php?id_empresa=<?= $id_empresa; ?>'><?= $descricao_empresa; ?></A></TD>
                                            </TR>
                                            <?}?>
                                            
                                        </TBODY>
                                    </TABLE>
                                </TD>
                            </TR>
                        </TBODY>
                    </TABLE>
                    
                    <TABLE class=arial_preto cellSpacing=0 cellPadding=10 width="100%" border=0>
                        <TBODY>
                            <TR>
                                <TD>[<A href="javascript:history.back(1);">« Voltar</A>]&nbsp; &nbsp;[<A href="empresas.php">Índice de Notícias</A>]</TD>
                            </TR>
                        </TBODY>
                    </TABLE>
                </TD>
            </TR>
        </TBODY>
    </TABLE>
</FIELDSET>

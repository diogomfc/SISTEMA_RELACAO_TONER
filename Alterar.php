<?php require("Connections\Conexao1.php");
//require_once('../Connections/Conexao1.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_update"])) && ($_POST["MM_update"] == "form")) {
  $updateSQL = sprintf("UPDATE tdrelacaotoner SET fabricante=%s, modelo=%s, especificacao=%s, compativel=%s, obs=%s, qtd_po=%s, preco_chip=%s, preco_refil=%s, preco_recarga=%s, preco_remanufaturado=%s WHERE ID=%s",
                       GetSQLValueString($_POST['fabricante'], "text"),
                       GetSQLValueString($_POST['modelo'], "text"),
                       GetSQLValueString($_POST['especificacao'], "text"),
                       GetSQLValueString($_POST['compativel'], "text"),
                       GetSQLValueString($_POST['obs'], "text"),
                       GetSQLValueString($_POST['qtd_po'], "text"),
                       GetSQLValueString($_POST['preco_chip'], "text"),
                       GetSQLValueString($_POST['preco_refil'], "text"),
                       GetSQLValueString($_POST['preco_recarga'], "text"),
                       GetSQLValueString($_POST['preco_remanufaturado'], "text"),
                       GetSQLValueString($_POST['ID'], "int"));

  mysql_select_db($database_Conexao1, $Conexao1);
  $Result1 = mysql_query($updateSQL, $Conexao1) or die(mysql_error());

  $updateGoTo = "Consulta.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $updateGoTo .= (strpos($updateGoTo, '?')) ? "&" : "?";
    $updateGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $updateGoTo));
}

$colname_Recordset1 = "-1";
if (isset($_GET['ID'])) {
  $colname_Recordset1 = $_GET['ID'];
}
mysql_select_db($database_Conexao1, $Conexao1);
$query_Recordset1 = sprintf("SELECT * FROM tdrelacaotoner WHERE ID = %s", GetSQLValueString($colname_Recordset1, "int"));
$Recordset1 = mysql_query($query_Recordset1, $Conexao1) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cadastro Relação de Toners</title>
<style type="text/css">
<!--
FonteTexto {
	font-family: Calibri;
}
NegritoTexto {
	font-weight: bold;
}
#form1 table {
	font-family: Calibri;
	font-weight: bold;
}
-->
</style>
<script type="text/javascript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script>
</head>

<body><table width="823" align="center">
  <tr>
    <td height="33"><table width="200">
      <tr>
        <td><img src="Imagem/BarraTopoAvante.png" width="1008" height="98" border="0" /></td>
      </tr>
      <tr>
        <td><img src="Imagem/BarraGerenciar.png" width="1008" height="25" border="0" usemap="#Map" /></td>
      </tr>
    </table>
<form action="<?php echo $editFormAction; ?>" name="form" method="POST" enctype="multipart/form-data">
        <table width="1013" border="1">
          <tr>
            <td width="997"><table width="1010" align="center">
              <tr>
                <td colspan="11" style="font-weight: bold; font-family: Calibri; color: #AC2F29; font-size: 24px;">ALTERAÇÃO DO CADASTRO</td>
                </tr>
              <tr>
                <td width="94" height="105" style="font-weight: bold; font-family: Calibri; color: #1B4972;">Fabricante:</td>
                <td width="151" style="font-weight: bold"><input name="fabricante" type="text" id="fabricante" value="<?php echo $row_Recordset1['fabricante']; ?>" /></td>
                <td width="98" style="font-weight: bold">&nbsp;</td>
                <td width="64" style="font-weight: bold">&nbsp;</td>
                <td width="12" style="font-weight: bold">&nbsp;</td>
                <td colspan="4" style="font-weight: bold">&nbsp;</td>
                <td width="123" style="font-weight: bold; text-align: center;"><img src="<?php echo $row_Recordset1['arquivo']; ?>" alt="" width="121" height="90" border="1" /></td>
                <td width="166" style="font-weight: bold; text-align: center;">&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold; font-family: Calibri; color: #1B4972;">Modelo:</td>
                <td style="font-weight: bold"><label>
                  <input name="modelo" type="text" id="modelo" value="<?php echo $row_Recordset1['modelo']; ?>" />
                </label></td>
                <td style="font-weight: bold">&nbsp;</td>
                <td rowspan="2" style="font-weight: bold">&nbsp;</td>
                <td colspan="7" style="font-weight: bold">&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold; font-family: Calibri; color: #1B4972;">Compativel:</td>
                <td colspan="2" rowspan="2" style="font-weight: bold"><textarea name="compativel" cols="35" rows="3" id="compativel"><?php echo $row_Recordset1['compativel']; ?></textarea></td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td colspan="3" style="text-align: right; font-weight: bold; font-family: Calibri; color: #41535B;">Quantidade de Pó:</td>
                <td colspan="2" style="font-weight: bold"><input name="qtd_po" type="text" id="qtd_po" value="<?php echo $row_Recordset1['qtd_po']; ?>" /></td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold">&nbsp;</td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td colspan="3" style="text-align: right; font-weight: bold; font-family: Calibri; color: #993;">Preço do Refil:</td>
                <td colspan="2" style="font-weight: bold"><input name="preco_refil" type="text" id="preco_refil" value="<?php echo $row_Recordset1['preco_refil']; ?>" /></td>
              </tr>
              <tr>
                <td style="font-weight: bold; color: #1B4972; font-family: Calibri;"><span style="font-family: Calibri">Especificação</span>:</td>
                <td colspan="3" rowspan="3" style="font-weight: bold"><label>
                  <textarea name="especificacao" cols="50" rows="4" id="especificacao"><?php echo $row_Recordset1['especificacao']; ?></textarea>
                </label></td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td colspan="3" style="text-align: right; font-weight: bold; font-family: Calibri; color: #F00;">Prazo da Entrega:</td>
                <td colspan="2" style="font-weight: bold"><input name="preco_recarga" type="text" id="preco_recarga" value="<?php echo $row_Recordset1['preco_recarga']; ?>" /></td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td colspan="3" style="text-align: right; font-weight: bold; font-family: Calibri; color: #993;">Preço Remanufaturado:</td>
                <td colspan="2" style="font-weight: bold"><input name="preco_remanufaturado" type="text" id="preco_remanufaturado" value="<?php echo $row_Recordset1['preco_remanufaturado']; ?>" /></td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td colspan="3" style="text-align: right; font-weight: bold; font-family: Calibri; color: #993;">Preço do Chip:</td>
                <td colspan="2" style="font-weight: bold"><input name="preco_chip" type="text" id="preco_chip" value="<?php echo $row_Recordset1['preco_chip']; ?>" /></td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold">&nbsp;</td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td colspan="3" style="text-align: right">&nbsp;</td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold; font-family: Calibri; color: #1B4972;">Observação:</td>
                <td colspan="3" rowspan="3" style="font-weight: bold"><textarea name="obs" cols="50" rows="4" id="obs"><?php echo $row_Recordset1['obs']; ?></textarea></td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td colspan="5" style="font-weight: bold">&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td colspan="5" style="font-weight: bold">&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td colspan="5" style="font-weight: bold">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="11" style="font-weight: bold">&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold"><input name="ID" type="hidden" id="ID" value="<?php echo $row_Recordset1['ID']; ?>" /></td>
                <td style="font-weight: bold; text-align: center;"><input type="submit" name="button" id="button" value="ATUALIZAR TONER" /></td>
                <td style="font-weight: bold; text-align: center;"><label>
                  <input name="button2" type="button" id="button2" onclick="MM_goToURL('parent','Consulta.php');return document.MM_returnValue" value="CONSULTAR" />
                </label></td>
                <td style="font-weight: bold; text-align: center;"><label>
                  <input type="reset" name="button3" id="button3" value="LIMPAR" />
                </label></td>
                <td colspan="7" style="font-weight: bold">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
        </table>
        <input type="hidden" name="MM_update" value="form" />
</form>
      <table width="200" align="center">
        <tr>
          <td><img src="Imagem/BarraRodapeAvante.png" width="1008" height="113" /></td>
        </tr>
    </table></td>
  </tr>
</table>

<map name="Map" id="Map">
  <area shape="rect" coords="2,1,80,22" href="IndexAdminCadastro.php" />
  <area shape="rect" coords="84,2,142,22" href="Consulta.php" />
  <area shape="rect" coords="149,2,212,22" href="Cadastro.php" />
  <area shape="rect" coords="217,3,347,23" href="../index.html" />
</map>
</body>
</html>
<?php
mysql_free_result($Recordset1);
?>

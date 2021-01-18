<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "../PagAreaRestrita.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0) 
  $MM_referrer .= "?" . $QUERY_STRING;
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
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
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <table width="1013" border="1">
          <tr>
            <td width="997"><table width="900" align="center">
              <tr>
                <td width="96" style="font-weight: bold; font-family: Calibri; color: #1B4972;">Fabricante:</td>
                <td width="151" style="font-weight: bold"><label>
                  <input type="text" name="fabricante" id="fabricante" />
                </label></td>
                <td width="98" style="font-weight: bold">&nbsp;</td>
                <td width="62" style="font-weight: bold">&nbsp;</td>
                <td width="1" style="font-weight: bold">&nbsp;</td>
                <td width="1" style="font-weight: bold">&nbsp;</td>
                <td colspan="2" style="font-weight: bold; text-align: center;"><span style="font-family: Calibri; color: #AC2F29; text-align: left;">Carregar Imagem do Toner:</span>                  <input name="arquivo" type="file" id="arquivo" />
                  <span style="text-align: left"></span>                  <span style="text-align: left"></span>                  <span style="text-align: left"></span>                  <span style="text-align: left"></span>                  <span style="text-align: left"></span></td>
                </tr>
              <tr>
                <td style="font-weight: bold; font-family: Calibri; color: #1B4972;">Modelo:</td>
                <td style="font-weight: bold"><label>
                  <input type="text" name="modelo" id="modelo" />
                </label></td>
                <td style="font-weight: bold">&nbsp;</td>
                <td rowspan="2" style="font-weight: bold">&nbsp;</td>
                <td colspan="4" style="font-weight: bold">&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold; font-family: Calibri; color: #1B4972;">Compativel:</td>
                <td colspan="2" rowspan="2" style="font-weight: bold"><textarea name="compativel" cols="35" rows="3" id="compativel"></textarea></td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td width="260" style="text-align: right; font-weight: bold; font-family: Calibri; color: #41535B;">Quantidade de Pó:</td>
                <td width="195" style="font-weight: bold"><input type="text" name="qtd_po" id="qtd_po" /></td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold">&nbsp;</td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td style="text-align: right; font-weight: bold; font-family: Calibri; color: #993;">Preço do Refil:</td>
                <td style="font-weight: bold"><input type="text" name="preco_refil" id="preco_refil" /></td>
              </tr>
              <tr>
                <td style="font-weight: bold; color: #1B4972; font-family: Calibri;"><span style="font-family: Calibri">Especificação</span>:</td>
                <td colspan="3" rowspan="3" style="font-weight: bold"><label>
                  <textarea name="especificacao" cols="50" rows="4" id="especificacao"></textarea>
                </label></td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td style="text-align: right; font-weight: bold; font-family: Calibri; color: #F00;">Prazo da Entrega:</td>
                <td style="font-weight: bold"><input type="text" name="preco_recarga" id="preco_recarga" /></td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td style="text-align: right; font-weight: bold; font-family: Calibri; color: #993;">Preço Remanufaturado:</td>
                <td style="font-weight: bold"><input type="text" name="preco_remanufaturado" id="preco_remanufaturado" /></td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td style="text-align: right; font-weight: bold; font-family: Calibri; color: #993;">Preço do Chip:</td>
                <td style="font-weight: bold"><input type="text" name="preco_chip" id="preco_chip" /></td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold">&nbsp;</td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td style="text-align: right">&nbsp;</td>
                <td style="font-weight: bold">&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold; font-family: Calibri; color: #1B4972;">Observação:</td>
                <td colspan="3" rowspan="3" style="font-weight: bold"><textarea name="obs" cols="50" rows="4" id="obs"></textarea></td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
                <td colspan="2" style="font-weight: bold">&nbsp;</td>
              </tr>
              <tr>
                <td colspan="8" style="font-weight: bold">&nbsp;</td>
              </tr>
              <tr>
                <td style="font-weight: bold">&nbsp;</td>
                <td style="font-weight: bold; text-align: center;"><input type="submit" name="button" id="button" value="CADASTRAR TONER" /></td>
                <td style="font-weight: bold; text-align: center;"><label>
                  <input name="button2" type="button" id="button2" onclick="MM_goToURL('parent','Consulta.php');return document.MM_returnValue" value="CONSULTAR" />
                </label></td>
                <td style="font-weight: bold; text-align: center;"><label>
                  <input type="reset" name="button3" id="button3" value="LIMPAR" />
                </label></td>
                <td colspan="4" style="font-weight: bold">&nbsp;</td>
              </tr>
            </table></td>
          </tr>
        </table>
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
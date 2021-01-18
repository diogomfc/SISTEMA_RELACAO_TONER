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
<title>Solicitação de Relatório</title>
<style type="text/css">
<!--
.testo2 {
	font-size: 18px;
}
.testo3 {
	font-family: Calibri;
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

<body>
<table width="803" align="center">
  <tr>
    <td colspan="2"><img src="Imagem/BarraTopoAvante.png" width="1008" height="98" /></td>
  </tr>
  <tr>
    <td width="649" rowspan="2"><p class="testo3">Solicitação de Relatório.</p>
    <p class="testo3"><span class="Testo" style="font-weight: bold; font-family: Calibri; font-size: 16px;"><span class="Testo" style="font-weight: bold; font-family: Calibri; font-size: 16px;">
      <input name="button3" type="button" id="button3" onclick="MM_goToURL('parent','php_Relatorio_PDF/relatoriopdf.php');return document.MM_returnValue" value="Gerar Relatório em PDF" />
    </span></span><span class="Testo" style="font-weight: bold; font-family: Calibri; font-size: 16px;"><span class="Testo" style="font-weight: bold; font-family: Calibri; font-size: 16px;"><span class="Testo" style="font-weight: bold; font-family: Calibri; font-size: 16px;"><span class="Testo" style="font-weight: bold; font-family: Calibri; font-size: 16px;"><span class="Testo" style="font-weight: bold; font-family: Calibri; font-size: 16px;"><span class="Testo" style="font-weight: bold; font-family: Calibri; font-size: 16px;"><span class="Testo" style="font-weight: bold; font-family: Calibri; font-size: 16px;"><span class="Testo" style="font-weight: bold; font-family: Calibri; font-size: 16px;">
    <input name="button" type="button" id="button" value="Gerar Relatório em XLS" />
    </span></span></span></span></span></span></span></span></p></td>
    <td width="355" height="35">&nbsp;</td>
  </tr>
  <tr>
    <td><span class="Testo" style="font-weight: bold; font-family: Calibri; font-size: 16px;"><span class="Testo" style="font-weight: bold; font-family: Calibri; font-size: 16px;"><span class="Testo" style="font-weight: bold; font-family: Calibri; font-size: 16px;"><span class="Testo" style="font-weight: bold; font-family: Calibri; font-size: 16px;"><span class="Testo" style="font-weight: bold; font-family: Calibri; font-size: 16px;"><span class="Testo" style="font-weight: bold; font-family: Calibri; font-size: 16px;">
      <input name="button2" type="button" id="button2" onclick="MM_goToURL('parent','Consulta.php');return document.MM_returnValue" value="VOLTAR" />
    </span></span></span></span></span></span></td>
  </tr>
  <tr>
    <td colspan="2"><img src="Imagem/BarraRodapeAvante.png" width="1008" height="113" /></td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
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
<title>SISTEMA GERENCIAMENTO</title>
</head>

<body>
<table width="733" align="center">
  <tr>
    <td><table width="200">
      <tr>
        <td><img src="Imagem/BarraTopoAvante.png" width="1008" height="98" /></td>
      </tr>
    </table>
      <table width="200">
        <tr>
          <td><img src="Imagem/IMG_CentroCadastro.png" width="1008" height="292" border="0" usemap="#Map" /></td>
        </tr>
      </table>
      <table width="200">
        <tr>
        <td><img src="Imagem/BarraRodapeAvante.png" width="1008" height="113" /></td>
      </tr>
    </table></td>
  </tr>
</table>

<map name="Map" id="Map">
  <area shape="rect" coords="753,7,935,34" href="../index.html" target="_blank" />
  <area shape="rect" coords="823,124,952,259" href="#" />
<area shape="rect" coords="689,122,816,260" href="#" />
<area shape="rect" coords="553,124,684,258" href="#" />
  <area shape="rect" coords="412,123,550,256" href="Cadastro.php" />
  <area shape="rect" coords="45,128,172,250" href="Relatorio.php" />
  <area shape="rect" coords="208,123,338,256" href="../PgManuais.php" />
</map>
</body>
</html>
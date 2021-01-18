<?php require_once('Connections/Conexao1.php'); ?>
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

$MM_restrictGoTo = "Login.php";
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

if ((isset($_POST['ID'])) && ($_POST['ID'] != "") && (isset($_GET['ID']))) {
  $deleteSQL = sprintf("DELETE FROM tdrelacaotoner WHERE ID=%s",
                       GetSQLValueString($_POST['ID'], "int"));

  mysql_select_db($database_Conexao1, $Conexao1);
  $Result1 = mysql_query($deleteSQL, $Conexao1) or die(mysql_error());

  $deleteGoTo = "Consulta.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $deleteGoTo .= (strpos($deleteGoTo, '?')) ? "&" : "?";
    $deleteGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $deleteGoTo));
}

$colname_Excluir = "-1";
if (isset($_GET['ID'])) {
  $colname_Excluir = $_GET['ID'];
}
mysql_select_db($database_Conexao1, $Conexao1);
$query_Excluir = sprintf("SELECT * FROM tdrelacaotoner WHERE ID = %s", GetSQLValueString($colname_Excluir, "int"));
$Excluir = mysql_query($query_Excluir, $Conexao1) or die(mysql_error());
$row_Excluir = mysql_fetch_assoc($Excluir);
$totalRows_Excluir = mysql_num_rows($Excluir);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Excluir Cadastro de Toners</title>
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
    <td height="267"><table width="200">
      <tr>
        <td><img src="Imagem/BarraTopoAvante.png" width="1008" height="98" border="0" /></td>
      </tr>
    </table>
     <form id="form1" name="form1" method="post" action="">
        <table width="1014" height="115">
          <tr>
            <td height="109"><table width="1005" height="105">
              <tr>
                <td width="124" rowspan="3"><img src="<?php echo $row_Excluir['arquivo']; ?>" alt="" width="120" height="90" border="2" bordercolor='#FF6600'/></td>
                <td width="752">Fabricante: <?php echo $row_Excluir['fabricante']; ?>  Modelo: <?php echo $row_Excluir['modelo']; ?></td>
                <td width="26"><input name="ID" type="hidden" id="ID" value="<?php echo $_GET['ID']; ?>" /></td>
              </tr>
              <tr>
                <td><span style="font-weight: bold"><strong>Tem certeza que de</strong>seja excluir o produto ao lado 
                    <label>
                    <input type="submit" name="button" id="button" value="Sim" />
                  </label>
                  <label>
                    <input name="button2" type="button" id="button2" onclick="MM_goToURL('parent','Consulta.php');return document.MM_returnValue" value="Não" />
                  </label>
                </span></td>
                <td>&nbsp;</td>
              </tr>
              <tr>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
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
</body>
</html>
<?php
mysql_free_result($Excluir);
?>

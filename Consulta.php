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

$maxRows_Listar = 10;
$pageNum_Listar = 0;
if (isset($_GET['pageNum_Listar'])) {
  $pageNum_Listar = $_GET['pageNum_Listar'];
}
$startRow_Listar = $pageNum_Listar * $maxRows_Listar;

$colname_Listar = "-1";
if (isset($_POST['fabricante'])) {
  $colname_Listar = $_POST['fabricante'];
}
$colmodelo_Listar = "-1";
if (isset($_POST['compativel'])) {
  $colmodelo_Listar = $_POST['compativel'];
}
mysql_select_db($database_Conexao1, $Conexao1);
$query_Listar = sprintf("SELECT * FROM tdrelacaotoner WHERE fabricante LIKE %s and compativel LIKE %s", GetSQLValueString("%" . $colname_Listar . "%", "text"),GetSQLValueString("%" . $colmodelo_Listar . "%", "text"));
$query_limit_Listar = sprintf("%s LIMIT %d, %d", $query_Listar, $startRow_Listar, $maxRows_Listar);
$Listar = mysql_query($query_limit_Listar, $Conexao1) or die(mysql_error());
$row_Listar = mysql_fetch_assoc($Listar);

if (isset($_GET['totalRows_Listar'])) {
  $totalRows_Listar = $_GET['totalRows_Listar'];
} else {
  $all_Listar = mysql_query($query_Listar);
  $totalRows_Listar = mysql_num_rows($all_Listar);
}
$totalPages_Listar = ceil($totalRows_Listar/$maxRows_Listar)-1;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta Relação de Toners</title>
</head>

<body>
<table width="1014" border="0" align="center">
  <tr>
    <td width="1087" height="68"><img src="Imagem/BarraTopoAvante.png" width="1008" height="98" /></td>
  </tr>
  <tr>
    <td height="31"><img src="Imagem/BarraGerenciar.png" width="1008" height="25" border="0" usemap="#Map" />
      <map name="Map" id="Map">
        <area shape="rect" coords="2,1,80,22" href="IndexAdminCadastro.php" />
        <area shape="rect" coords="84,2,142,22" href="Consulta.php" />
        <area shape="rect" coords="149,2,212,22" href="Cadastro.php" />
        <area shape="rect" coords="217,3,347,23" href="../index.html" />
    </map></td>
  </tr>
  
    <td><table width="1003">
      <tr>
        <td width="771"><form id="form1" name="form1" method="post" action="">
          <p style="font-family: Calibri; font-weight: bold;">Localizar Fabricante:
            <label>
              <input type="text" name="fabricante" id="fabricante" />
              </label>
            e por Modelo | Compativel:
            <label>
              <input type="text" name="compativel" id="compativel" />
              </label>
            <input type="submit" name="button" id="button" value="Localizar" />
            <span style="font-family: Century"></span></p>
        </form></td>
        <td width="80" style="font-weight: bold; color: #090;">Localizado: </td>
        <td width="136" style="font-weight: bold; color: #1B4A73;"><?php echo $totalRows_Listar ?></td>
        </tr>
    </table>
      <table width="1007" border="0">
        <tr>
        <td width="115" bgcolor="#BBCBDE" style="font-family: Calibri; color: #B7302A; font-weight: bold; text-align: center; font-size: 18px;">Imagem</td>
        <td width="116" bgcolor="#BBCBDE" style="font-family: Calibri; font-weight: bold; color: #B7302A; font-size: 18px; text-align: center;">Fabricante</td>
        <td width="111" bgcolor="#BBCBDE" style="font-family: Calibri; font-weight: bold; color: #B7302A; font-size: 18px; text-align: center;">Modelo</td>
        <td width="206" bgcolor="#BBCBDE" style="font-family: Calibri; color: #B7302A; font-weight: bold; font-size: 18px; text-align: center;">Compativel</td>
        <td width="151" bgcolor="#BBCBDE" style="font-family: Calibri; font-weight: bold; color: #B7302A; font-size: 18px;"><span style="font-family: Calibri; color: #B7302A; font-weight: bold; font-size: 18px; text-align: center;">Remanufaturado</span></td>
        <td width="151" bgcolor="#BBCBDE" style="font-family: Calibri; color: #1A476F; font-weight: bold; font-size: 18px; text-align: center;">Prazo de Entrega</td>
        <td colspan="2" bgcolor="#BBCBDE" style="font-family: Calibri; color: #B7302A; font-weight: bold;">GERÊNCIAR</td>
        </tr>
      <?php do { ?>
        <tr>
          <td><img src="<?php echo $row_Listar['arquivo']; ?>" width="121" height="90" border="1" /></td>
          <td bgcolor="#D3DBE3" style="text-align: center; color: #1B4871; font-family: Calibri;"><?php echo $row_Listar['fabricante']; ?></td>
          <td bgcolor="#D3DBE3" style="text-align: center; color: #1B4871; font-family: Calibri;"><?php echo $row_Listar['modelo']; ?></td>
          <td bgcolor="#D3DBE3" style="text-align: center; color: #1B4871; font-family: Calibri;"><?php echo $row_Listar['compativel']; ?></td>
          <td bgcolor="#D3DBE3" style="font-weight: bold; text-align: center; color: #1B4871; font-family: Calibri;"><?php echo $row_Listar['preco_remanufaturado']; ?></td>
          <td bgcolor="#D3DBE3" style="font-weight: bold; text-align: center; color: #F00; font-family: Calibri;"><?php echo $row_Listar['preco_recarga']; ?></td>
          <td width="25" bgcolor="#D3DBE3" style="font-weight: bold; font-family: Calibri; color: #F00;"><a href="ExcluiCadastro.php?ID=<?php echo $row_Listar['ID']; ?>"><img src="Imagem/imgExcluir.png" alt="Excluir" width="32" height="32" /></a></td>
          <td width="28" bgcolor="#D3DBE3" style="font-weight: bold; font-family: Calibri; color: #F00;"><a href="Alterar.php?ID=<?php echo $row_Listar['ID']; ?>"><img src="Imagem/imgAltear.png" alt="Alterar" width="32" height="32" /></a></td>
        </tr>
        <?php } while ($row_Listar = mysql_fetch_assoc($Listar)); ?>
    </table></td>
  </tr>
  <tr>
    <td><img src="Imagem/BarraRodapeAvante.png" width="1008" height="113" /></td>
  </tr>
</table>
</body>
</html>
<?php
mysql_free_result($Listar);
?>

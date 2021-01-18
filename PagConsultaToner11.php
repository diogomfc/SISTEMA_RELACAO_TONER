<?php 
require("Connections\Conexao2.php");
//require_once('../Connections/Conexao2.php'); ?>

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

$colname_Listar = "-1";
if (isset($_POST['fabricante'])) {
  $colname_Listar = $_POST['fabricante'];
}
$colmodelo_Listar = "-1";
if (isset($_POST['compativel'])) {
  $colmodelo_Listar = $_POST['compativel'];
}
mysql_select_db($database_Conexao2, $Conexao2);
$query_Listar = sprintf("SELECT * FROM tdrelacaotoner WHERE fabricante LIKE %s and compativel LIKE %s", GetSQLValueString("%" . $colname_Listar . "%", "text"),GetSQLValueString("%" . $colmodelo_Listar . "%", "text"));
$Listar = mysql_query($query_Listar, $Conexao2) or die(mysql_error());
$row_Listar = mysql_fetch_assoc($Listar);
$totalRows_Listar = mysql_num_rows($Listar);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Consulta Relação de Toners</title>
<style type="text/css">
<!--
body {
	background-color: #FFF;
}
-->
</style></head>

<body>
<table width="1008">
  <tr>
    <td width="832"><form id="form1" name="form1" method="post" action="">
      <p style="font-family: Calibri; font-weight: bold;">Localizar Fabricante:
        <label>
          <input type="text" name="fabricante" id="fabricante" />
        </label>
        ou por Modelo | Compativel:
        <label>
          <input type="text" name="compativel" id="compativel" />
        </label>
        <label>
          <input type="submit" name="button" id="button" value="Localizar" />
        </label>
        <span style="font-family: Century"></span></p>
    </form></td>
    <td width="164"><img src="IMAGEM/Express.png" alt="" width="160" height="55" /></td>
  </tr>
</table>
<table width="1008" border="0">
  <tr>
    <td width="122" bgcolor="#BBCBDE" style="font-family: Calibri; color: #B7302A; font-weight: bold; text-align: center; font-size: 18px;">Imagem</td>
    <td width="128" bgcolor="#BBCBDE" style="font-family: Calibri; font-weight: bold; font-size: 18px; color: #B7302A;">Fabricante</td>
    <td width="128" bgcolor="#BBCBDE" style="font-family: Calibri; font-weight: bold; font-size: 18px; color: #B7302A;">Modelo</td>
    <td width="224" bgcolor="#BBCBDE" style="font-family: Calibri; color: #B7302A; font-weight: bold; font-size: 18px;">Compativel</td>
    <td width="215" bgcolor="#BBCBDE" style="font-family: Calibri; font-weight: bold; font-size: 18px; color: #B7302A;"><span style="font-family: Calibri; color: #B7302A; font-weight: bold; font-size: 18px;">Remanufaturado</span></td>
    <td width="165" bgcolor="#BBCBDE" style="font-family: Calibri; color: #B7302A; font-weight: bold; font-size: 18px;"><span style="font-family: Calibri; color: #B7302A; font-weight: bold; font-size: 18px; text-align: center;">Prazo de <span style="text-align: center"></span>Entrega</span></td>
  </tr>
  <?php do { ?>
  <tr>
    <td><img src="<?php echo $row_Listar['arquivo']; ?>" alt="" width="120" height="90" border="1" bordercolor='#FF6600'/></td>
    <td bgcolor="#D3DBE3" style="text-align: center; font-family: Calibri; color: #1B4871;"><?php echo $row_Listar['fabricante']; ?></td>
    <td bgcolor="#D3DBE3" style="text-align: center; font-family: Calibri; color: #1B4871;"><?php echo $row_Listar['modelo']; ?></td>
    <td bgcolor="#D3DBE3" style="text-align: center; font-family: Calibri; color: #1B4871;"><?php echo $row_Listar['compativel']; ?></td>
    <td bgcolor="#D3DBE3" style="font-weight: bold; text-align: center; font-family: Calibri; color: #1B4871;"><?php echo $row_Listar['preco_remanufaturado']; ?></td>
    <td bgcolor="#D3DBE3" style="font-weight: bold; text-align: center; font-family: Calibri; color: #D1332D;"><?php echo $row_Listar['preco_recarga']; ?></td>
  </tr>
  <?php } while ($row_Listar = mysql_fetch_assoc($Listar)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($Listar);
?>

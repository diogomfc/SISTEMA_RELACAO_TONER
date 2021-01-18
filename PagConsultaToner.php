<?php require("Connections\Conexao2.php");
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
	background-color: #EFEFEF;
}
-->
</style></head>

<body>
<table border="0" align="center">
  <tr>
    <td width="1039" valign="top"><table width="1040" height="101">
      <tr>
        <td background="Imagem/IMG_TOPOAVANTE.png">&nbsp;
          <table width="1032">
            <tr>
              <td width="814">&nbsp;</td>
              <td width="206"><table width="192">
                <tr>
                  <td width="16"><a target="_blank" href="http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=e755a8fd8f42ecbb@apps.messenger.live.com&amp;mkt=pt-br&amp;useTheme=true&amp;themeName=blue&amp;foreColor=333333&amp;backColor=E8F1F8&amp;linkColor=333333&amp;borderColor=AFD3EB&amp;buttonForeColor=333333&amp;buttonBackColor=EEF7FE&amp;buttonBorderColor=AFD3EB&amp;buttonDisabledColor=EEF7FE&amp;headerForeColor=0066A7&amp;headerBackColor=8EBBD8&amp;menuForeColor=333333&amp;menuBackColor=FFFFFF&amp;chatForeColor=333333&amp;chatBackColor=FFFFFF&amp;chatDisabledColor=F6F6F6&amp;chatErrorColor=760502&amp;chatLabelColor=6E6C6C"><img src="http://messenger.services.live.com/users/e755a8fd8f42ecbb@apps.messenger.live.com/presenceimage?mkt=pt-br" alt="" width="16" height="16" style="border-style: none;" /></a></td>
                  <td width="172" style="font-size: 14px; font-family: Verdana, Geneva, sans-serif;"><a href="http://settings.messenger.live.com/Conversation/IMMe.aspx?invitee=e755a8fd8f42ecbb@apps.messenger.live.com&amp;mkt=pt-br&amp;useTheme=true&amp;themeName=blue&amp;foreColor=333333&amp;backColor=E8F1F8&amp;linkColor=333333&amp;borderColor=AFD3EB&amp;buttonForeColor=333333&amp;buttonBackColor=EEF7FE&amp;buttonBorderColor=AFD3EB&amp;buttonDisabledColor=EEF7FE&amp;headerForeColor=0066A7&amp;headerBackColor=8EBBD8&amp;menuForeColor=333333&amp;menuBackColor=FFFFFF&amp;chatForeColor=333333&amp;chatBackColor=FFFFFF&amp;chatDisabledColor=F6F6F6&amp;chatErrorColor=760502&amp;chatLabelColor=6E6C6C">Suporte Online</a></td>
                </tr>
              </table></td>
            </tr>
          </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td><img src="Imagem/Barra001.png" width="1039" height="25" border="0" usemap="#Map" /></td>
  </tr>
  
          <td height="317"><table width="1042">
            
          </table>
            <iframe src="PagConsultaToner11.php" name="CENTRO" width="1039" height="400" scrolling="1" frameborder="0" id="CENTRO" border="0"> </iframe></td>
  </tr>
  <tr>
    <td><img src="Imagem/BarraRodapeLocalizar.png" width="1039" height="113" /></td>
  </tr>
</table>

<map name="Map" id="Map">
  <area shape="rect" coords="2,1,70,21" href="../index.html" />
  <area shape="rect" coords="76,2,208,22" href="../PagAreaRestrita.php" />
  <area shape="rect" coords="214,2,309,22" href="../PgSobreAvante.html" />
  <area shape="rect" coords="318,3,384,22" href="../PagContatos.html" />
</map>
</body>
</html>
<?php
mysql_free_result($Listar);
?>

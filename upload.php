<script type="text/javascript">
<!--
function MM_goToURL() { //v3.0
  var i, args=MM_goToURL.arguments; document.MM_returnValue = false;
  for (i=0; i<(args.length-1); i+=2) eval(args[i]+".location='"+args[i+1]+"'");
}
//-->
</script><title>Cadastro Efetuado Com Sucesso</title>

<br>
<table width="682" border="0" align="center">
  <tr>
    <td><table width="200" border="0">
  <tr>
    <td><img src="Imagem/BarraTopoAvante.png" width="1008" height="98" /></td>
  </tr>
</table>
      <table width="938" border="0">
  <tr>
    <td colspan="3"><style type="text/css">
<!--
body {
	background-image: url();
}
-->
</style><? //Fabyo Guimaraes
include("Connections\Conexao1.php");
//require("Connections\testeConexao.php");
//se existir o arquivo
if(isset($_FILES["arquivo"])){

$arquivo = $_FILES["arquivo"];

$pasta_dir = "arquivos/";//diretorio dos arquivos
//se nao existir a pasta ele cria uma
if(!file_exists($pasta_dir)){
mkdir($pasta_dir);
}

$arquivo_nome = $pasta_dir . $arquivo["name"];

// Faz o upload da imagem
move_uploaded_file($arquivo["tmp_name"], $arquivo_nome);

//conecta no banco
$arquivo = $_POST['arquivo'];
$arquivo_procedimento = $_POST['arquivo_procedimento'];
$compativel = $_POST['compativel'];
$especificacao = $_POST['especificacao'];
$fabricante = $_POST['fabricante'];
$ID = $_POST['ID'];
$impressoras = $_POST['impressoras'];
$modelo = $_POST['modelo'];
$obs = $_POST['obs'];
$preco_chip = $_POST['preco_chip'];
$preco_cilindro = $_POST['preco_cilindro'];
$preco_recarga = $_POST['preco_recarga'];
$preco_refil = $_POST['preco_refil'];
$preco_remanufaturado = $_POST['preco_remanufaturado'];
$qtd_po = $_POST['qtd_po'];


$query = "INSERT INTO tdrelacaotoner (arquivo, arquivo_procedimento, compativel, especificacao, fabricante, impressoras, modelo, obs, preco_chip, preco_cilindro, preco_recarga, preco_refil, preco_remanufaturado, qtd_po) VALUES ('$arquivo_nome','$arquivo_procedimento','$compativel','$especificacao','$fabricante','$impressoras','$modelo','$obs','$preco_chip','$preco_cilindro','$preco_recarga','$preco_refil','$preco_remanufaturado','$qtd_po')"; // inserção sql na tabela tdrelacaotoner
mysql_query($query) or die (mysql_error());
mysql_close();//fecha conexão

}

?>
<? echo "<center><font size='3'>Cadastrado com sucesso<br>$fabricante";
echo "<center><br>";
echo  "<img src='$arquivo_nome' width='250'><br>$modelo";
?></td>
  </tr>
  <tr>
    <td width="79"><form id="form1" name="form1" method="post" action="">
      <label>
        <input name="Cosultar" type="submit" id="Cosultar" onclick="MM_goToURL('parent','Consulta.php');return document.MM_returnValue" value="COSULTAR" />
      </label>
    </form></td>
    <td width="88"><form id="form2" name="form2" method="post" action="">
      <label>
        <input name="Cadastrar" type="submit" id="Cadastrar" onclick="MM_goToURL('parent','Cadastro.php');return document.MM_returnValue" value="CADASTRAR" />
      </label>
    </form></td>
    <td width="721"><form id="form3" name="form3" method="post" action="">
    </form></td>
  </tr>
</table>
<table width="936" border="0">
  <tr>
    <td><img src="Imagem/BarraRodapeAvante.png" width="1008" height="113" /></td>
    </tr>
</table></td>
  </tr>
</table>

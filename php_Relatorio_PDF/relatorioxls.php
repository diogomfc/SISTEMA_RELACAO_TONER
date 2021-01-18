<?php
# ESSE HEADERS VAO SER RESPONSAVEL DE PEGAR OS DADOS DA PAGINA I COLOCARLOS NO .xls
header("Content-type: application/vnd.ms-excel");
header("Content-type: application/force-download");
#NOME PADRAO DO ARQUIVO CASO relatorio.xls
header("Content-Disposition: attachment; filename=RelacaoToners.xls");
header("Pragma: no-cache");
#FAZ CONEXAO COM O BANCO
include ("ConexaoAvante.php");
# CABEÇARIO DO EXCEL
$xls .= "<table>
<tr>

<th>MODELO</th>
<th>COMPATIVEL</th>
<th>PRECO RECARGA</th>
<th>PRECO REMANUFATURADO</th>
</tr>";
#LISTAGEM DA TABELA
$select = mysql_query("select * from tdrelacaotoner order by ID");
while($row = mysql_fetch_array($select)){
$xls .= "<tr>";
#$xls .= "<td>".$row['ID']."</td>";
#$xls .= "<td>".$row['arquivo']."</td>";
$xls .= "<td>".$row['modelo']."</td>";
$xls .= "<td>".$row['compativel']."</td>";
$xls .= "<td>".$row['preco_recarga']."</td>";
$xls .= "<td>".$row['preco_remanufaturado']."</td>";
$xls .= "</tr>";
}
$xls .= "</table>";
echo $xls;
?>

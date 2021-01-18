<?
/***************************************************************************
DESCRIÇÃO .......: Gerando um PDF utilizando banco de dados MySQL
BY ..............: Júlio César Martini - baphp@imasters.com.br
SITE ............: iMasters - http://www.imasters.com.br
CRIADO EM .......: 09/01/2005
****************************************************************************/

//CONFIGURAÇÕES DO BD MYSQL                               
$servidor    =  "mysql01.avantesolucoes.com.br";                              
$usuario     =  "avantesolucoes";                                   
$senha       =  "C0ncr3t0";                                       
$bd          =  "avantesolucoes";                               
//TÍTULO DO RELATÓRIO                                     
$titulo      =  "Relação de Toners Cadastrados";                 
//LOGO QUE SERÁ COLOCADO NO RELATÓRIO                     
$imagem      =  "logo.gif";                      
//ENDEREÇO DA BIBLIOTECA FPDF                             
$end_fpdf    =  "E:/home/avantesolucoes/Web/SISTEMA_RELACAO_TONER/php_Relatorio_PDF/fpdf";              
//NUMERO DE RESULTADOS POR PÁGINA                         
$por_pagina  =  28;                                       
//ENDEREÇO ONDE SERÁ GERADO O PDF                         
//$end_final   =  "C:/desktop/artigo_php.pdf";
$por_name   =  "RelacaoToners.pdf";    
//TIPO DO PDF GERADO                                      
//F-> SALVA NO ENDEREÇO ESPECIFICADO NA VAR END_FINAL     
$tipo_pdf    =  "D";
                                     


/************** NÃO MEXER DAQUI PRA BAIXO ***************/

//CONECTA COM O MYSQL
$conn   =   mysql_connect($servidor, $usuario, $senha);
$db     =   mysql_select_db($bd, $conn);    
$sql    =   mysql_query("SELECT A.modelo, A.compativel, A.fabricante, A.preco_remanufaturado FROM tdrelacaotoner A", $conn);
$row    =   mysql_num_rows($sql);           

//VERIFICA SE RETORNOU ALGUMA LINHA
if(!$row) { echo "Não retornou nenhum registro"; die; }

//CALCULA QUANTAS PÁGINAS VÃO SER NECESSÁRIAS
$paginas   =  ceil($row/$por_pagina);        

//PREPARA PARA GERAR O PDF
define("FPDF_FONTPATH", "$end_fpdf/font/");
require_once("$end_fpdf/fpdf.php");        
$pdf   =   new FPDF();

//INICIALIZA AS VARIÁVEIS
$linha_atual =  0;
$inicio      =  0;

//PÁGINAS
for($x=1; $x<=$paginas; $x++) {
   //VERIFICA
   $inicio      =  $linha_atual;
   $fim         =  $linha_atual + $por_pagina;
   if($fim > $row) $fim = $row;
   
   $pdf->Open();                    
   $pdf->AddPage();                 
   $pdf->SetFont("Arial", "B", 7); 
   
   //MONTA O CABEÇALHO              
   $pdf->Image($imagem, 2, 0);
   $pdf->Ln(12);
   $pdf->Cell(185, 8, "RELACAO DE CADASTRO DE TONERS", 0, 0, 'C');  
   $pdf->Cell(1, 8, "Pagina $x de $paginas", 0, 0, 'R');          
   
   //QUEBRA DE LINHA
   $pdf->Ln(15);
   
   $pdf->Cell(25, 8, "FABRICANTE", 1, 0, 'L');          
   $pdf->Cell(25, 8, "MODELO", 1, 0, 'L');
   $pdf->Cell(110, 8, "COMPATIVEL", 1, 0, 'C');  
   $pdf->Cell(30, 8, "REMANUFATURADO", 1, 1, 'C');  
   
   //EXIBE OS REGISTROS      
   for($i=$inicio; $i<$fim; $i++) {
      $pdf->Cell(25, 8, mysql_result($sql, $i, "fabricante"), 1, 0, 'L');      
      $pdf->Cell(25, 8, mysql_result($sql, $i, "modelo"), 1, 0, 'L');  
      $pdf->Cell(110, 8, mysql_result($sql, $i, "compativel"), 1, 0, 'C'); 
	  $pdf->Cell(30, 8, mysql_result($sql, $i, "preco_remanufaturado"), 1, 1, 'C'); 
	  $linha_atual++;
   }//FECHA FOR(REGISTROS - i)
}//FECHA FOR(PAGINAS - x)

//SAIDA DO PDF
$pdf->Output("$por_name", "$tipo_pdf");
?>
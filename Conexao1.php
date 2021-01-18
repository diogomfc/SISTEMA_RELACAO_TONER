<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_Conexao1 = "mysql01.avantesolucoes.com.br";
$database_Conexao1 = "avantesolucoes";
$username_Conexao1 = "avantesolucoes";
$password_Conexao1 = "C0ncr3t0";
$Conexao1 = mysql_pconnect($hostname_Conexao1, $username_Conexao1, $password_Conexao1) or trigger_error(mysql_error(),E_USER_ERROR); 

$conexao = mysql_connect ("mysql01.avantesolucoes.com.br","avantesolucoes","C0ncr3t0") OR die (mysql_error()); // Conectando a
mysql_select_db ("avantesolucoes")  OR die (mysql_error()); // Conectando em uma base de dados 
?>
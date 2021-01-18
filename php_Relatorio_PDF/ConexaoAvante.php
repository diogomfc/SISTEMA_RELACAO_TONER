<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_ConexaoAvante = "mysql01.avantesolucoes.com.br";
$database_ConexaoAvante = "avantesolucoes";
$username_ConexaoAvante = "avantesolucoes";
$password_ConexaoAvante = "C0ncr3t0";
$ConexaoAvante = mysql_pconnect($hostname_ConexaoAvante, $username_ConexaoAvante, $password_ConexaoAvante) or trigger_error(mysql_error(),E_USER_ERROR); 
?>
<?php

//criar uma conexão para o MySQL

$host='127.0.0.1';
$bd='cadastro';
$userdb='root';
$senhabd='senac';

//receber do form
$nome=$_POST["nome"];
$email=$_POST["email"];
$sexo=$_POST["sexo"];
$ddd=$_POST["ddd"];
$tel=$_POST["telefone"];
$endereco=$_POST["endereco"];
$cidade=$_POST["cidade"];
$estado=$_POST["estado"];
$bairro=$_POST["bairro"];
$pais=$_POST["pais"];
$login=$_POST["login"];
$senha=$_POST["senha"];
$news=$_POST["news"];

//conectando com o bd
$conexao=mysql_connect($host,$bd,$userdb,$senhabd);
if(!$conexao)
    die("Erro de conexão:".mysql_error());
$banco=mysql_select_db($bd,$conexao);
if(!$banco)
    die("Erro de conexão ao banco:".mysql_error());



?>




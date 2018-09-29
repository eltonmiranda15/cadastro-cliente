<?php 
session_start();
require_once("conecta.php"); 

$consulta1 = "select * from dados_cliente"; 
$con1 = $conexao->query($consulta1) or die ($conexao->error);

$consulta2 = "select * from dados_curso"; 
$con2 = $conexao->query($consulta2) or die ($conexao->error);
?>
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<script type="text/javascript" src="../js/jquery.js"></script>


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<title>Cadastro clientes</title>
	<link rel="stylesheet" href="../css/index.css">
</head>
<body>
	
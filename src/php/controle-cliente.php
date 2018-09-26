<?php
session_start();
require_once("conecta.php");

    $nome = $_POST['nome'];
    $valor_pagamento = $_POST['valor_pagamento'];
    $descricao_produto = $_POST['descricao_produto'];
    $horas_trabalho = $_POST['horas_trabalho'];

    //Salvar no banco de dados
    $sql = "INSERT INTO dados_cliente (nome, valor_pagamento, descricao_produto,  horas_trabalho) VALUES ('$nome','$valor_pagamento','$descricao_produto', '$horas_trabalho')";
    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_insert_id($conexao)){
        $_SESSION['msg'] = "Informações enviadas com sucesso";
        header("Location: index.php");
    }else{
        $_SESSION['msg'] = "Informações não foram enviadas :(";
        header("Location: index.php");
    }


?>
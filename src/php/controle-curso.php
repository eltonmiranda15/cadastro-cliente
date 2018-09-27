<?php
session_start();
require_once("conecta.php");

if(!isset($_POST)) {
    echo "Nao houve requisição POST";
    EXIT;
}
/*
valida se o cmapo existe na requisição
$variavel = (isset($_POST['campo']))? $_POST['campo'] : 'valor padrão'; */
    $nome_curso = $_POST['nome_curso'];
    $dificuldade = $_POST['dificuldade'];
    $descricao_curso = $_POST['descricao_curso'];
    $projetos_curso = $_POST['projetos_curso'];
    $projeto_finalizado = $_POST['projeto_finalizado'];
    $projeto_concluido = $_POST['projeto_concluido'];
    $projeto_andamento = $_POST['projeto_andamento'];
    $data_hora_inicio = $_POST['data_hora_inicio'];
    $data_hora_finalizacao = $_POST['data_hora_finalizacao'];

    //Salvar no banco de dados
    $sql = "INSERT INTO dados_curso (nome_curso, dificuldade, descricao_curso,  projetos_curso, projeto_finalizado, projeto_concluido, projeto_andamento, data_hora_inicio, data_hora_finalizacao) VALUES ('$nome_curso','$dificuldade','$descricao_curso', '$projetos_curso', '$projeto_finalizado', '$projeto_concluido', '$projeto_andamento', '$data_hora_inicio', '$data_hora_finalizacao')";

    $resultado = mysqli_query($conexao, $sql);

    if(mysqli_insert_id($conexao)){
        $_SESSION['msg'] = "Informações enviadas com sucesso";
        header("Location: formulario-curso.php");
    }else{
        $_SESSION['msg'] = "Informações não foram enviadas :(";
        header("Location: formulario-curso.php");
    }


?>
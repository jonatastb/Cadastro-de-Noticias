<?php

include 'conexao.php';

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$conteudo = $_POST['conteudo'];

$sql_cad = "INSERT INTO `noticias`(`id`, `titulo`, `descricao`, `conteudo`) VALUES ('','{$titulo}','{$descricao}','{$conteudo}')";

if (mysqli_query($conn, $sql_cad)) {
    header('location: index.php');
}

?>
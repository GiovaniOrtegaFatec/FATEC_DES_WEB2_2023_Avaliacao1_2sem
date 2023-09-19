<?php

session_start();

if (!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
</head>
<body>
    <h1>Bem-vindo à página inicial.</h1>
    <a href="registros.php">Visualizar registros de alunos</a>
    <br>
    <a href="cadastro_aluno.html">Cadastrar Novo Aluno</a>
    <br>
    <a href="logout.php">Sair</a>
    <br>
</body>
</html>

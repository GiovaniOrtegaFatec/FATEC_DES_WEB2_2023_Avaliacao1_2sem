<?php
session_start();

if (!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true) {
    header("Location: login.html");
    exit();
}

$nome = $_POST["nome"];
$ra = $_POST["ra"];
$placa = $_POST["placa"];

if (empty($nome) || empty($ra) || empty($placa)) {
    echo "Todos os campos devem ser preenchidos. <a href='cadastro.html'>Tente novamente</a>.";
} else {
    $formatacao = "$nome|$ra|$placa\n";

    $arquivo = fopen("alunos.txt", "a");

    if ($arquivo) {

        fwrite($arquivo, $formatacao);

        fclose($arquivo);

        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro ao abrir o arquivo.";
    }
}
?>
<?php
session_start();

$username_correto = "portaria";
$senha_correto = "FatecAraras";

// Obtém os dados do formulário
$username = $_POST["username"];
$senha = $_POST["senha"];

if ($username == $username_correto && $senha == $senha_correto) {
    $_SESSION["logado"] = true;
 
    header("Location: welcome.php");
    exit();
} else {
    echo "Login ou senha incorretos. <a href='index.html'>Tente novamente</a>.";
}
?>



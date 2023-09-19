<?php
session_start();

if(!isset($_SESSION["logado"]) || $_SESSION["logado"] !== true){
    header("location: index.html");
    exit;
}

$filename = "alunos.txt";

if(!file_exists("alunos.txt")){
    print "Não há informações a serem exibidas";

}elseif(file_exists("alunos.txt")){
    $file = file("alunos.txt");
    foreach($file as $line){
        $line = trim($line);
        $alunos = explode("|",$line);
        echo "$alunos[0]", " | ";
        echo "$alunos[1]"," | ";
        echo "$alunos[2]";
        echo "<br>";
    }
}



?>

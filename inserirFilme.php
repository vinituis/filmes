<?php

$bd = new SQLite3("filmes.db");

$titulo     = $bd->escapeString($_POST["titulo"]);
$sinopse    = $bd->escapeString($_POST["sinopse"]);
$nota       = $bd->escapeString($_POST["nota"]);
$poster     = $bd->escapeString($_POST["poster"]);

$sql = "INSERT INTO filmes (titulo, poster, sinopse, nota) VALUES (
    '$titulo',
    '$poster',
    '$sinopse',
    $nota
)";

if($bd->exec($sql)) 
    echo "\nfilme inserido\n";
else
    echo "\nerro ao inserir filme." . $bd->lastErrorMsg();

header("Location: galeria.php?msg=Filme+cadastrado+com+sucesso");

?>
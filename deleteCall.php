<?php

require 'dbConfig.php';

$idChamado = FILTER_VAR(FILTER_INPUT(INPUT_GET, 'idChamado'));

if($idChamado){
    $sql = $conn->prepare("DELETE FROM chamado WHERE id_chamado = :id_chamado");
    $sql->bindValue(':id_chamado', $idChamado);
    $sql->execute();
} else {
    echo "erro";
}

header ("Location: index.php");

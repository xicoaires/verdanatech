<?php

include_once('../dao/ChamadoDAO.php');


$idChamado = FILTER_VAR(FILTER_INPUT(INPUT_POST, 'idChamado'));
$titulo = FILTER_VAR(FILTER_INPUT(INPUT_POST, 'titulo'));
$descricao =FILTER_VAR(FILTER_INPUT(INPUT_POST, 'descricao'));
$status = FILTER_VAR(FILTER_INPUT(INPUT_POST, 'status'));
$dtAbertura = FILTER_VAR(FILTER_INPUT(INPUT_POST, 'dtAbertura'));
$solicitante = FILTER_VAR(FILTER_INPUT(INPUT_POST, 'solicitante'));

$updateChamado = new Chamado();

$updateChamado->setIdChamado($idChamado);
$updateChamado->setTitulo($titulo);
$updateChamado->setDescricao($descricao);
$updateChamado->setStatus($status);
$updateChamado->setDtAbertura($dtAbertura);
$updateChamado->setSolicitante($solicitante);

(new ChamadoDAO())->update($updateChamado);
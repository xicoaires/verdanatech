<?php

include_once('../dao/ChamadoDAO.php');


$titulo = FILTER_VAR(FILTER_INPUT(INPUT_POST, 'titulo'));
$descricao =FILTER_VAR(FILTER_INPUT(INPUT_POST, 'descricao'));
$status = FILTER_VAR(FILTER_INPUT(INPUT_POST, 'status'));
$dtAbertura = FILTER_VAR(FILTER_INPUT(INPUT_POST, 'dtAbertura'));
$solicitante = FILTER_VAR(FILTER_INPUT(INPUT_POST, 'solicitante'));

$novoChamado = new Chamado();

$novoChamado->setTitulo($titulo);
$novoChamado->setDescricao($descricao);
$novoChamado->setStatus($status);
$novoChamado->setDtAbertura($dtAbertura);
$novoChamado->setSolicitante($solicitante);

(new ChamadoDAO())->insert($novoChamado);
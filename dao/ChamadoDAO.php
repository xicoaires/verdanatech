<?php

include_once('../model/Chamado.php');

class ChamadoDAO {
	
		function insert(\Chamado $novoChamado){
	
		$conn = new PDO("mysql:host=localhost;dbname=verdana", "root", "12345");

		$sql = $conn->prepare("INSERT INTO chamado (titulo, descricao, status, dt_abertura, solicitante) VALUES (:titulo, :descricao, :status, :dt_abertura, :solicitante)");
		$sql->bindValue(':titulo', $novoChamado->getTitulo());
		$sql->bindValue(':descricao', $novoChamado->getDescricao());
		$sql->bindValue(':status', $novoChamado->getStatus());
		$sql->bindValue(':dt_abertura', $novoChamado->getDtAbertura());
		$sql->bindValue(':solicitante', $novoChamado->getSolicitante());
		$sql->execute();

	}
	function update(\Chamado $updateChamado){
	
		$conn = new PDO("mysql:host=localhost;dbname=verdana", "root", "12345");

		$sql = $conn->prepare("UPDATE chamado SET titulo = :titulo, descricao = :descricao, status = :status, dt_abertura=:dt_abertura, solicitante = :solicitante WHERE id_chamado=:id_chamado");
		$sql->bindValue(':titulo', $updateChamado->getTitulo());
		$sql->bindValue(':descricao', $updateChamado->getDescricao());
		$sql->bindValue(':status', $updateChamado->getStatus());
		$sql->bindValue(':dt_abertura', $updateChamado->getDtAbertura());
		$sql->bindValue(':solicitante', $updateChamado->getSolicitante());
		$sql->bindValue(':id_chamado', $updateChamado->getIdChamado());
		$sql->execute();
		
	}
}
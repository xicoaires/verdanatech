<?php

class Chamado implements JsonSerializable{
	
	protected $idChamado;
	protected $titulo;
	protected $descricao;
	protected $status;
	protected $dtAbertura;
	protected $solicitante;
	
	public function jsonSerialize() {
		return [
			"idChamado" => (string) $this->idChamado,
			"titulo" => (string) $this->titulo,
			"descricao" => (string) $this->descricao,
			"status" => (string) $this->status,
			"dtAbertura" => (string) $this->dtAbertura,
			"solicitante" => (string) $this->solicitante
		];
		
	}
	
	public function __construct($data = null)
	{
		if (is_array($data))
		{
			$this->idChamado = $data['id_chamado'];
			$this->titulo = $data['titulo'];
			$this->descricao = $data['descricao'];
			$this->status = $data['status'];
			$this->dtAbertura = $data['dt_abertura'];
			$this->solicitante = $data['solicitante'];
		}
	}
	
	public function getIdChamado(){
		return $this->idChamado;
	}
	
	public function setIdChamado($idChamado){
		$this->idChamado = $idChamado;
	}
	
	public function getTitulo(){
		return $this->titulo;
	}
	
	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}
	
	public function getDescricao(){
		return $this->descricao;
	}
	
	public function setDescricao($descricao){
		$this->descricao = $descricao;
	}
	
	public function getStatus(){
		return $this->status;
	}
	
	public function setStatus($status){
		$this->status = $status;
	}
	
	public function getDtAbertura(){
		return $this->dtAbertura;
	}
	
	public function setDtAbertura($dtAbertura){
		$this->dtAbertura = $dtAbertura;
	}
	
	public function getSolicitante(){
		return $this->solicitante;
	}
	
	public function setSolicitante($solicitante){
		$this->solicitante = $solicitante;
	}
	
	
}

?>
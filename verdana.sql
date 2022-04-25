CREATE TABLE chamado
	(
		id_chamado INTEGER PRIMARY KEY AUTO_INCREMENT,
		titulo VARCHAR(100) not null,
		descricao VARCHAR(255) not null,
		status VARCHAR(10) not null,
		dt_abertura DATE not null,
		solicitante VARCHAR(100) not null
	); 
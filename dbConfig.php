<?php

$servername = "localhost"; // Host do bando de dados.
$dbname = "verdana";
$username = "root"; // Usuário que vai se connectar com o banco de dados
$password = "12345"; // Senha do usuário

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); // conexão padrão para DB em MYSQL

 
/* try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password); // conexão padrão para DB em MYSQL
    set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
*/
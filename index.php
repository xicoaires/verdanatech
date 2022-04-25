<?php
include_once 'dbConfig.php';

$lista = [];
$sql = $conn->query("SELECT * FROM chamado"); 
if ($sql->rowCount() > 0){
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de chamado</title>

    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
    <script src="js/functions.js"></script>
</head>

<body>
    <div class="container">
        <div class="buttonOpenCall">
            <button class="ui secondary button" id="btnNewCall">
                Abrir chamado
            </button>
        </div>
        <table class="ui striped table">
                <thead class="thead">
                    <tr>
                        <th style="display:none;">Id</th>
                        <th>Título</th>
                        <th>Descrição</th>
                        <th>Solitante</th>
                        <th>Status</th>
                        <th>Ação</th>
                    </tr>
                </thead>
            <tbody>
            <?php foreach ($lista as $chamado): ?>
                <tr>
                    <td style="display:none;"><?=$chamado['id_chamado'];?></td>
                    <td><?=$chamado['titulo'];?></td>
                    <td><?=$chamado['descricao'];?></td>
                    <td><?=$chamado['solicitante'];?></td>
                    <td><?=$chamado['status'];?></td>
                    <td data-label="Ação">
                        <a href="updateCall.php?idChamado=<?=$chamado['id_chamado'];?>"><i class="pencil alternate icon" id="iconUpdate"></a></i>
                        <a href="deleteCall.php?idChamado=<?=$chamado['id_chamado'];?>"><i class="trash icon" id="iconDelete"></a></i></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>  
</body>
</html>


<?php
require 'dbConfig.php';

$chamado = [];
$idChamado = filter_input(INPUT_GET, 'idChamado');

if ($idChamado){
    $sql = $conn->prepare("SELECT * FROM chamado WHERE id_chamado = :id_chamado");
    $sql->bindValue(':id_chamado', $idChamado);
    $sql->execute();

    if($sql->rowCount() > 0){
        $chamado = $sql->fetch(PDO::FETCH_ASSOC);
    } else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova chamada</title>

    <link href="css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/1.11.8/semantic.min.js"></script>
    <script src="js/functions.js"></script>
</head>
<body>

    <div class="container">
        <div class="ui form">
        <div class="eight wide field" style="display: none;">
            <input type="text" name="idChamado" id="idChamado" value="<?=$chamado['id_chamado'];?>"/>
        </div>
            <div class="eight wide field required">
                <label>Título</label>
                <input type="text" name="titulo" id="titulo" value="<?=$chamado['titulo'];?>"/>
            </div>

            <div class="twelve wide field required">
                <label>Descrição</label>
                <textarea type="text" id="descricao"><?=$chamado['descricao'];?></textarea>
            </div>

                <div class="eight wide field required">
                <label>Status</label>
                    <select id="status" name="status"">
                    <option value=""><?=$chamado['status'];?></option>
                        <?php
                           if($chamado['status'] == 'Aberto'){
                               echo '<option value="Fechado">Fechado</option>';
                           } else {
                               echo '<option value="Aberto">Aberto</option>';
                           }
                        
                        ?>

                    </select>
                </div>

                <div class="eight wide field required">
                    <label>Data de abertura</label>
                    <div class="ui calendar">
                        <div class="ui input left icon">
                            <i class="calendar icon"></i>
                            <input type="date" id="dtAbertura" name="dtAbertura" value="<?=$chamado['dt_abertura'];?>">
                        </div>
                    </div>
                </div>
            
            <div class="eight wide field required">
                <label>Solicitante</label>
                <input type="text" name="solicitante" id="solicitante" name="solicitante" value="<?=$chamado['solicitante'];?>">
            </div>

            <button class="ui secondary button" id="btnUpdate">Atualizar</button>
        </div>
    </div>
</body>
</html>
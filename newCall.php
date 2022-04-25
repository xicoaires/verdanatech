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
            <div class="eight wide field required">
                <label>Título</label>
                <input type="text" name="titulo" id="titulo" required>
            </div>

            <div class="twelve wide field required">
                <label>Descrição</label>
                <textarea id="descricao" required></textarea>
            </div>

                <div class="eight wide field required">
                <label>Status</label>
                    <select id="status" name="status" required>
                    <option value=""> </option>
                    <option value="Aberto">Aberto</option>
                    <option value="Fechado">Fechado</option>
                    </select>
                </div>

                <div class="eight wide field required">
                    <label>Data de abertura</label>
                    <div class="ui calendar">
                        <div class="ui input left icon">
                            <i class="calendar icon"></i>
                            <input type="date" id="dtAbertura" name="dtAbertura" required>
                        </div>
                    </div>
                </div>
            
            <div class="eight wide field required">
                <label>Solicitante</label>
                <input type="text" name="solicitante" id="solicitante" name="solicitante">
            </div>

            <button class="ui secondary button" id="btnSave">Salvar</button>
        </div>
    </div>
</body>
</html>
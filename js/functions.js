$(document).ready(function() {

    $("#btnNewCall").click(function(){
        window.location="newCall.php";
    });

    $("#btnSave").click(function(){
        var titulo = $("#titulo").val();
        var descricao = $("#descricao").val();
        var status = $("#status").val();
        var dtAbertura = $("#dtAbertura").val();
        var solicitante = $("#solicitante").val();
        createNewCall(titulo, descricao,status,dtAbertura,solicitante);
    });

    $("#btnUpdate").click(function(){
        var idChamado = $("#idChamado").val();
        var titulo = $("#titulo").val();
        var descricao = $("#descricao").val();
        var status = $("#status").val();
        var dtAbertura = $("#dtAbertura").val();
        var solicitante = $("#solicitante").val();
        updateCall(idChamado,titulo, descricao,status,dtAbertura,solicitante);
    });

});

function createNewCall (titulo, descricao,status,dtAbertura,solicitante) {

    let data = new FormData();
    data.append("titulo", titulo);
    data.append("descricao", descricao);
    data.append("status", status);
    data.append("dtAbertura", dtAbertura);
    data.append("solicitante", solicitante);

    $.ajax({
        url: "functions/insertNewCall.php",
        type: "POST",
        data: data,
        dataType: "json",
        processData: false,
        contentType: false,
    });
    
    setTimeout(function(){ window.location="index.php" }, 1000);
};

function updateCall (idChamado, titulo, descricao,status,dtAbertura,solicitante) {

    let data = new FormData();
    data.append("idChamado", idChamado);
    data.append("titulo", titulo);
    data.append("descricao", descricao);
    data.append("status", status);
    data.append("dtAbertura", dtAbertura);
    data.append("solicitante", solicitante);

    $.ajax({
        url: "functions/updCall.php",
        type: "POST",
        data: data,
        dataType: "json",
        processData: false,
        contentType: false,
    });

    setTimeout(function(){ window.location="index.php" }, 1000);
};

function deleteCall(idChamado) {

    let data = new FormData();
    data.append("idChamado", idChamado);
    
    $.ajax({
        url: "functions/deleteCall.php",
        type: "POST",
        data: data,
        dataType: "json",
        processData: false,
        contentType: false
        });
};
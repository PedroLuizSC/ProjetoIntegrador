<?php
session_start();

include "bancoServico.php";

$conn = conectarBanco();

$listaServico = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $servico = [
        "Profissional" => isset($_POST["Profissional"]) ? $_POST["Profissional"] : "",
        "descricaoServico" => isset($_POST["descricaoServico"]) ? $_POST["descricaoServico"] : "",
        "PrazoDe" => isset($_POST["PrazoDe"]) ? $_POST["PrazoDe"] : "",
        "PrazoAte" => isset($_POST["PrazoAte"]) ? $_POST["PrazoAte"] : "",
        "prioridade" => isset($_POST["prioridade"]) ? $_POST["prioridade"] : "",
        "Valor" => isset($_POST["Valor"]) ? $_POST["Valor"] : ""
    ];

    // Concatenando as datas para formar um intervalo se ambos os campos forem preenchidos
    if (!empty($servico["PrazoDe"]) && !empty($servico["PrazoAte"])) {
        $servico["Prazo"] = "{$servico['PrazoDe']} até {$servico['PrazoAte']}";
    } else {
        // Definir um valor padrão caso um dos campos não seja preenchido
        $servico["Prazo"] = $servico["PrazoDe"] ?: $servico["PrazoAte"];
    }

    if (!empty($servico["Profissional"])) {
        gravarServicos($conn, $servico);
    }
}

$listaServico = recuperaServicos($conn);

mysqli_close($conn);

include "template.php";
?>

<?php

function conectarBanco() {
    $servidor = 'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'db_servico';

    $conn = mysqli_connect($servidor, $usuario, $senha, $banco);
    if (!$conn) {
        throw new Exception("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }
    return $conn;
}

function recuperaServicos($conn) {
    $query = "SELECT * FROM servicos";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Erro ao recuperar serviços: " . mysqli_error($conn);
        return [];
    }

    $servicos = [];
    while ($servico = mysqli_fetch_assoc($result)) {
        $servicos[] = $servico;
    }

    return $servicos;
}

function gravarServicos($conn, $servico) {
    $query = "
        INSERT INTO servicos (Profissional, descricaoServico, Prazo, prioridade, Valor)
        VALUES (
            '{$servico['Profissional']}',
            '{$servico['descricaoServico']}',
            '{$servico['Prazo']}',
            '{$servico['prioridade']}',
            '{$servico['Valor']}'
        );
    ";

    if (!mysqli_query($conn, $query)) {
        echo "Erro ao gravar serviço: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Lista de Serviços</h1>
    <main>
        <form method="POST">
            <fieldset>
                <legend>Novo Serviço</legend>
                <label for="Profissional">Profissional:</label><br>
                <input type="text" name="Profissional"><br>

                <label for="descricaoServico">Descrição do Serviço:</label><br>
                <textarea name="descricaoServico" cols="30" rows="5"></textarea><br>

                <label for="PrazoDe">Prazo de:</label><br>
                <input type="date" name="PrazoDe"> até
                <input type="date" name="PrazoAte"><br>

                <fieldset>
                    <legend>Prioridade:</legend>
                    <label>
                        <input type="radio" name="prioridade" value="1" checked> Baixa
                        <input type="radio" name="prioridade" value="2"> Média
                        <input type="radio" name="prioridade" value="3"> Alta
                    </label>
                </fieldset>

                <label for="Valor">
                    Valor:
                    <input type="number" name="Valor" step="0.01" min="0"><br>
                </label><br>

                <input type="submit" value="Enviar">
            </fieldset>
        </form>

        <table>
            <tr>
                <th>Profissional</th>
                <th>Descrição do Serviço</th>
                <th>Prazo</th>
                <th>Prioridade</th>
                <th>Valor</th>
            </tr>
            <?php if (isset($listaServico) && is_array($listaServico)) : ?>
                <?php foreach ($listaServico as $servico) : ?>
                    <tr>
                        <td><?php echo htmlspecialchars($servico['Profissional']); ?></td>
                        <td><?php echo htmlspecialchars($servico['descricaoServico']); ?></td>
                        <td><?php echo htmlspecialchars($servico['Prazo']); ?></td>
                        <td>
                            <?php
                            switch ($servico['prioridade']) {
                                case '1':
                                    echo 'Baixa';
                                    break;
                                case '2':
                                    echo 'Média';
                                    break;
                                case '3':
                                    echo 'Alta';
                                    break;
                            }
                            ?>
                        </td>
                        <td><?php echo htmlspecialchars($servico['Valor']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else : ?>
                <tr>
                    <td colspan="5">Nenhum serviço encontrado.</td>
                </tr>
            <?php endif; ?>
        </table>
    </main>
</body>

</html>

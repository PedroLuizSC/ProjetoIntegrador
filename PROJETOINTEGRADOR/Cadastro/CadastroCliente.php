<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form>
        <fielset>
            <legend>Dados Pessoais</legend>
            <label>
                Nome: <input type="text" name="nome"/><br>
            </label>
            <label>
                Data de Nascimento: <input type="date" name="nascimento"/><br>
            </label>
            <legend>
                Gênero: 
            </legend>
            <label>
                <input type="radio" name="genero" value="masculino" checked /> Masculino
                <input type="radio" name="genero" value="feminino" /> Feminino
                <input type="radio" name="genero" value="nãoqueroidentificar"/> Não quero identificar
            </label>
            <label>
                CPF: <input type="text" name="cpf"/>
            </label>
            <label>
                CEP: <input type="text" name="cep"/>
            </label>
                <label>
                Endereço: <textarea name="endereco"></textarea>
                </label>
                <label>
                Email: <input type="text" name="email">
                </label>
                <label>
                Senha: <input type="password" name="senha">
                </label>
                <input type="submit" name="concluido">
        </fielset>
    </form>
    <table>
        <tr>
            <th>Nome</th>
            <th>Nascimento</th>
            <th>Gênero</th>
            <th>CPF</th>
            <th>CEP</th>
            <th>Endereço</th>
            <th>Email</th>
            <th>Senha</th>
        </tr>
        <?php foreach ($cadastrocliente as $clientes): ?>
            <tr>
                <td><?php echo $clientes['nome']; ?></td>
                <td><?php echo $clientes['nascimento']; ?></td>
                <td><?php echo $clientes['genero']; ?></td>
                <td><?php echo $clientes['cpf']; ?></td>
                <td><?php echo $clientes['cep']; ?></td>
                <td><?php echo $clientes['endereco']; ?></td>
                <td><?php echo $clientes['email']; ?></td>
                <td><?php echo $clientes['senha']; ?></td>
            </tr>
            </tr>
            </tr>
            <?php endforeach; ?>
    </table>
    
</body>
</html>
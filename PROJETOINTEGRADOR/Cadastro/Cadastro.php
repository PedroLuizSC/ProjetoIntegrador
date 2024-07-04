<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <form action="Cadastro.php" method="get">
            <fieldset>
                <legend><b>Faça seu cadastro</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome"> Nome Completo </label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email"> Email </label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha"> Senha </label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone"> Telefone </label>
                </div>
                <br><br>
                <p> Gênero </p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino"> Feminino </label>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino"> Masculino </label>
                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro"> Outro </label>
                <br><br>
                <div class="inputBox">
                    <label for="data_nascimento"> Data de Nascimento</label>
                    <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                    <label for="cpf"> CPF </label>
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    </div>
                    <br><br>
                <div class="inputBox">
                    <label for="cep"> CEP </label>
                    <input type="text" name="cep" id="cep" class="inputUser" required>
                </div>
                <br><br>
                <div class="inputBox">
                <label for="endereco"> Endereço </label>
                <textarea name="endereco"></textarea>
                <input type="submit" name="enviar" id="enviar">

            </fieldset>
    
        </form>
    </div>
</body>
</html>
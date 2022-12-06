<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se | SMS - Serviço Municipal de Saúde</title>
    <link rel="stylesheet" href="../css/home/style-home.css" type="text/css">
    <link rel="icon" type="image/x-icon" href="files/media/img/SMS Favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/sistema/cadastro.css">
</head>
<body>
    <main>
        <section id="cabecalho-formulario-cadastro">
            <img src="../files/media/img/SMS Logo H.png" alt="" width="360px">
        </section>
        <br>
        <section id="formulario-cadastro">
            <h2>CADASTRE-SE</h2>
            <br>
            <h4><b>INFORMAÇÕES PESSOAIS</b></h4>
            <br>
            <label for="nome">Nome Completo:</label>
            <input type="text" name="nomec" id="nome" placeholder="Digite o nome completo" required>
            <label for="cpf">CPF:</label>
            <input type="text" name="cpf" id="cpf" placeholder="Digite o seu CPF" required>
            <label for="data-nasc">Data de Nascimento:</label>
            <input type="date" name="data-nasc" id="data-nasc" required>
            <br>
            <br id="espaco-formulario">
            <label for="filiacao">FILIAÇÃO</label>
            <br>
            <label for="pai">Nome do Pai:</label>
            <input type="text" name="pai" id="pai">
            <input type="checkbox" name="naoconsta" id="naoconsta">
            <label for="naoconsta">Não consta</label>
            <br id="espaco-formulario">
            <label for="mae">Nome da Mãe:</label>
            <input type="text" name="mae" id="mae">
            <input type="checkbox" name="naoconsta" id="naoconsta">
            <label for="naoconsta">Não consta</label>
            <br>
            <br id="espaco-formulario">
            <label for="naturalidade">Naturalidade:</label>
            <input type="text" name="naturalidade" id="naturalidade">
            <label for="nacionalidade">Nacionalidade:</label>
            <input type="radio" name="nacionalidade" id="nacionalidade" BRASILEIRA>
            <label for="nacionalidade">BRASILEIRA</label>
            <input type="radio" name="nacionalidade" id="nacionalidade">
            <label for="nacionalidade">ESTRANGEIRA</label>
            <br>
            <br>
            <h4><b>INFORMAÇÕES DE CONTATO</b></h4>
            <br>
            <label for="prontuario">ENDEREÇO</label>
            <br>
            <label for="prontuario">Endereço: </label>
            <input type="text" name="prontuario" id="prontuario" required>
            <label for="prontuario">Nº: </label>
            <input type="text" name="prontuario" id="prontuario" required>
            <br>
            <label for="prontuario">Complemento: </label>
            <input type="text" name="prontuario" id="prontuario" required>
            <label for="prontuario">Bairro: </label>
            <input type="text" name="prontuario" id="prontuario" required>
            <br>
            <label for="prontuario">Município: </label>
            <input type="text" name="prontuario" id="prontuario" required>
            <label for="prontuario">UF: </label>
            <input type="text" name="prontuario" id="prontuario" required>
            <label for="prontuario">CEP: </label>
            <input type="text" name="prontuario" id="prontuario" required>
            <br>
            <br>
            <h4><b>INFORMAÇÕES DE ACESSO</b></h4>
            <br>
            <label for="prontuario">Nº do Prontuário: </label>
            <input type="text" name="prontuario" id="prontuario" placeholder="Digite o número do prontuário" required>
            <br>
            <label for="usuario">Nome de Usuário: </label>
            <input type="text" name="usuario" id="usuario" placeholder="Digite um nome de usuário" required>
            <br>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha" placeholder="Crie uma senha" required>
            
            <br>
            <label for="enviar">ENVIAR</label>
            <input type="button" name="enviar" id="enviar">
        </section>
    </main>
</body>
</html>

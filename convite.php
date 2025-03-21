<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="convite.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Captura e Exibe Dados do Input</title>
</head>
<body>
<form action="script.php" method="POST">
    <h1>Crie seu convite</h1>
    <h4>
        <i class="fa-regular fa-calendar"></i>
        Sobre o evento
    </h4>
    <label for="titulo">Título</label>
    <input type="text" id="titulo" name="titulo" required>

    <label for="startParty">Início</label>
    <input type="datetime-local" id="startParty" name="startParty">

    <label for="endParty">Fim</label>
    <input type="datetime-local" id="endParty" name="endParty">
    <br><br>

    <select id="tipo" name="tipo">
        <option>Presencial</option>
        <option>Online</option>
    </select>

    <label for="local">Local</label>
    <input type="text" id="local" name="local">

    <textarea id="descricao" name="descricao" placeholder="Descrição"></textarea>

    <h4>
        <i class="fa-solid fa-brush"></i>
        Personalização
    </h4>
    <div class="color">
        <label for="cor">Cor principal</label>
        <input type="color" id="cor" name="cor">

    </div>

    <p>Tema do evento</p>
    <select id="tema" name="tema">
        <option>Aniverário</option>
        <option> Infantil</option>
        <option>Formatura</option>
        <option>Casamento</option>
        <option>Chá de bebê</option>
        <option>Chá de panela</option>
        <option>Carnaval</option>
        <option>Páscoa</option>
        <option>São João</option>
        <option>Hallowen</option>
        <option>Natal</option>
        <option>Outro</option>
    </select>
    <div id="estilo">
        <input type="checkbox" id="claro">Claro
        <input type="checkbox" id="escuro">Escuro
    </div>

    <label>Foto da capa<br>
        <input type="file" id="fotoCapa" name="fotoCapa">
    </label>
    <h4>Dados para contato</h4>
    <label for="nome">Nome</label>
    <input type="text" id="nome" name="nome">
    <label for="email">E-mail</label>
    <input type="email" id="email" name="email" placeholder="Digite o seu email">
    <label for="phone">Telefone</label>
    <input type="tel" id="phone" name="phone" placeholder="(00) 00000-0000">

    <hr>
    <input type="checkbox" id="termos" name="termos"> Li e condordo com os <a>Termos e Condições</a> e com a <a>Política de Privacidade</a><br>
    <input type="checkbox" id="atualizacao_email" name="atualizacao_email"> Aceito receber atualizações e promoções por e-mail<br>
    <input type="checkbox" id="atualizacao_sms" name="atualizacao_sms"> Aceito receber atualizções e promoções por SMS

    <button type="submit">Enviar</button>
</form>
</body>
</html>
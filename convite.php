<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="convite.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Convite</title>
</head>
<body>
<main>
    <div>
    <h1>Crie seu convite</h1>
    <h4>
        <i class="fa-regular fa-calendar"></i>
        Sobre o evento
    </h4>
    <label>Título</label>
    <input type="text" placeholder="Nome do evento">
    <label>Início</label>
    <input type="datetime-local">
    <label>Fim</label>
    <input type="datetime-local">
    <div class="btn">
        <button type="button">
            <i class="fa-solid fa-building-user"></i>
            Presencial
        </button>
        <button type="button">
            <i class="fa-solid fa-video"></i>
            Online
        </button>
    </div>
    <label>Local</label>
    <input type="text" placeholder="Link ou endereço">

    <label for="areatext">Descrição</label>
    <textarea placeholder="Escreva sobre os detalhes do evento" id="areatext"></textarea>
    </div>

    <div class="colors">
    <h4>
        <i class="fa-solid fa-brush"></i>
        Personalização
    </h4>
        <p>Cor principal</p>
        <input type="color">
        <input type="color">
        <input type="color">
        <input type="color">
        <input type="color">
        <input type="color">
        <input type="color">
        <input type="color">
        <input type="color">
        <input type="color">
        <input type="color">
    </div>
    
    <div class="theme">
        <img src="">
        <img src="">
        <img src="">
        <img src="">
        <img src="">
        <img src="">
        <img src="">
        <img src="">
        <img src="">
        <img src="">
        <img src="">
        <img src="">
        <label>Estilo</label>
        <button>Escuro</button>
        <label>Foto da capa</label>
        <input type="file">
    </div>
    <div class="contact">
        <h4>
            <i class="fa-solid fa-address-card"></i>
            Dados para contato
        </h4>
        <label for="nome">Nome</label>
        <input type="text" placeholder="Nome completo" id="nome" required>
        <label for="email">E-mail</label>
        <input type="email" id="email" placeholder="exemplo@email.com" required>
        <label for="phonenumber">Telefone</label>
        <input type="tel" placeholder="(00) 00000-0000" id="phonenumber" required>
    </div>
    <hr>
    <div>
        <input type="checkbox" required>Li e concordo com os <a>Termos e Condições</a> e com a <a>Política de Privacidade</a>
        <input type="checkbox">Aceito receber atualizações e promoções por e-mail
        <input type="checkbox">Aceito receber atualizações e promoções por SMS
    <button>
        <i class="fa-solid fa-ticket"></i>
        Gerar convite
    </button>
    </div>
</main>
</body>
</html>
<?php

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
            <div class="form">
                <h1>Crie seu convite</h1>
                <h4>
                     <i class="fa-regular fa-calendar"></i>
                        Sobre o evento
                </h4>
                <label>Título</label>
                <input type="text" placeholder="Nome do evento" name="titulo" id="titulo">

                <label>Início</label>
                <input type="datetime-local" name="partyStart" id="partyStart" >

                <label>Fim</label>
                <input type="datetime-local" name="partyEnd" id="partyEnd">

                <div class="btn">
                    <button type="button" id="presence">
                        <i class="fa-solid fa-building-user"></i>
                        Presencial
                    </button>
                    <button type="button" id="online">
                        <i class="fa-solid fa-video"></i>
                        Online
                    </button>
                </div>
                <label>Local</label>
                <input type="text" placeholder="Link ou endereço" name="local" id="local">

                <label for="areatext">Descrição</label>
                <textarea placeholder="Escreva sobre os detalhes do evento" name="areatext" id="areatext"></textarea>
            </div>

            <div class="colors">
                <h4>
                    <i class="fa-solid fa-brush"></i>
                    Personalização
                </h4>
                <p>Cor principal</p>
                <input type="color" id="cor1" name="cor1" value="#59B2FF">
                <input type="color" id="cor2" name="cor2" value="#6A59FF">
                <input type="color" id="cor3" name="cor3" value="#B259FF">
                <input type="color" id="cor4" name="cor4" value="#FF59F9">
                <input type="color" id="cor5" name="cor5" value="#FF598B">
                <input type="color" id="cor6" name="cor6" value="#FF5959">
                <input type="color" id="cor7" name="cor7" value="#FF8B59">
                <input type="color" id="cor8" name="cor8" value="#FFCD59">
                <input type="color" id="cor9" name="cor9" value="#E1FF59">
                <input type="color" id="cor10" name="cor10" value="#59FF91">
                <input type="color" id="cor11" name="cor11" value="#59FFF9">
            </div>

            <div class="theme">
                <img src="" id="image1">
                <img src="" id="image2">
                <img src="" id="image3">
                <img src="" id="image4">
                <img src="" id="image5">
                <img src="" id="image6">
                <img src="" id="image7">
                <img src="" id="image8">
                <img src="" id="image9">
                <img src="" id="image10">
                <img src="" id="image11">
                <img src="" id="image12">
                <label for="blackWhite">Estilo</label>
                <button id="blackWhite">Escuro</button>
                <label for="arq">Foto da capa</label>
                <input type="file" id="arq">
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

            <div class="terms">
                <input type="checkbox" required> Li e concordo com os <a>Termos e Condições</a> e com a <a>Política de Privacidade</a><br>
                <input type="checkbox"> Aceito receber atualizações e promoções por e-mail<br>
                <input type="checkbox"> Aceito receber atualizações e promoções por SMS
                <form action="script.php" method="post" enctype="multipart/form-data">
                    <button class="generate" id="generate">
                        <i class="fa-solid fa-ticket"></i>
                        Gerar convite
                    </button>
                </form>
            </div>
        </main>
    </body>
</html>
<?php


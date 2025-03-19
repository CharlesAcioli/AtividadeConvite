<?php
// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Receber os dados do formulário
    $titulo = isset($_POST['titulo']) ? htmlspecialchars($_POST['titulo']) : '';
    $partyStart = isset($_POST['partyStart']) ? htmlspecialchars($_POST['partyStart']) : '';
    $partyEnd = isset($_POST['partyEnd']) ? htmlspecialchars($_POST['partyEnd']) : '';
    $local = isset($_POST['local']) ? htmlspecialchars($_POST['local']) : '';
    $descricao = isset($_POST['areatext']) ? htmlspecialchars($_POST['areatext']) : '';

    // Cores
    $cor1 = isset($_POST['cor1']) ? htmlspecialchars($_POST['cor1']) : '#59B2FF';
    $cor2 = isset($_POST['cor2']) ? htmlspecialchars($_POST['cor2']) : '#6A59FF';
    $cor3 = isset($_POST['cor3']) ? htmlspecialchars($_POST['cor3']) : '#B259FF';
    $cor4 = isset($_POST['cor4']) ? htmlspecialchars($_POST['cor4']) : '#FF59F9';
    $cor5 = isset($_POST['cor5']) ? htmlspecialchars($_POST['cor5']) : '#FF598B';
    $cor6 = isset($_POST['cor6']) ? htmlspecialchars($_POST['cor6']) : '#FF5959';
    $cor7 = isset($_POST['cor7']) ? htmlspecialchars($_POST['cor7']) : '#FF8B59';
    $cor8 = isset($_POST['cor8']) ? htmlspecialchars($_POST['cor8']) : '#FFCD59';
    $cor9 = isset($_POST['cor9']) ? htmlspecialchars($_POST['cor9']) : '#E1FF59';
    $cor10 = isset($_POST['cor10']) ? htmlspecialchars($_POST['cor10']) : '#59FF91';
    $cor11 = isset($_POST['cor11']) ? htmlspecialchars($_POST['cor11']) : '#59FFF9';

    // Estilo
    $estilo = isset($_POST['blackWhite']) ? 'dark' : 'light';

    // Dados para contato
    $nome = isset($_POST['nome']) ? htmlspecialchars($_POST['nome']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phonenumber = isset($_POST['phonenumber']) ? htmlspecialchars($_POST['phonenumber']) : '';

    // Foto da capa
    $image = isset($_FILES['arq']) ? $_FILES['arq'] : null;
    $imagePath = '';
    if ($image && $image['error'] == 0) {
        // Salvar a imagem em um diretório
        $uploadDir = 'uploads/';
        $imagePath = $uploadDir . basename($image['name']);
        move_uploaded_file($image['tmp_name'], $imagePath);
    }

    // Definir cores para o tema
    $bgColor = $estilo == 'dark' ? '#333' : '#fff';
    $textColor = $estilo == 'dark' ? '#fff' : '#000';
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convite - <?= $titulo ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: <?= $bgColor ?>;
            color: <?= $textColor ?>;
            text-align: center;
        }
        .card {
            width: 600px;
            margin: 50px auto;
            padding: 20px;
            border-radius: 10px;
            background-color: <?= $bgColor ?>;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        h1, h2 {
            color: <?= $textColor ?>;
        }
        .details {
            margin: 20px 0;
        }
        .btn {
            text-align: center;
            margin-top: 30px;
        }
        .btn a {
            padding: 10px 20px;
            background-color: <?= $cor1 ?>;
            color: <?= $textColor ?>;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .btn a:hover {
            background-color: darken(<?= $cor1 ?>, 10%);
        }
        .image-cover {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }
        .contact-info {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="card">
    <h1><?= $titulo ?></h1>
    <?php if ($imagePath): ?>
        <img src="<?= $imagePath ?>" alt="Foto de capa" class="image-cover">
    <?php endif; ?>
    <p><strong>Data:</strong> <?= date('d/m/Y H:i', strtotime($partyStart)) ?> - <?= date('d/m/Y H:i', strtotime($partyEnd)) ?></p>
    <div class="details">
        <p><strong>Local:</strong> <?= $local ?></p>
        <p><strong>Descrição:</strong> <?= nl2br($descricao) ?></p>
    </div>

    <div class="contact-info">
        <h2>Dados para Contato</h2>
        <p><strong>Nome:</strong> <?= $nome ?></p>
        <p><strong>Email:</strong> <?= $email ?></p>
        <p><strong>Telefone:</strong> <?= $phonenumber ?></p>
    </div>

    <div class="btn">
        <a href="mailto:<?= $email ?>">Confirmar Presença</a>
    </div>
</div>

</body>
</html>

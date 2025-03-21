<?php
// Verificando se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = $_POST['titulo'];
    $startParty = $_POST['startParty'];
    $endParty = $_POST['endParty'];
    $tipo = $_POST['tipo'];
    $local = $_POST['local'];
    $descricao = $_POST['descricao'];
    $cor = $_POST['cor'];
    $tema = $_POST['tema'];
    $fotoCapa = $_POST['fotoCapa'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $termos = isset($_POST['termos']) ? 'Sim' : 'Não';
    $atualizacao_email = isset($_POST['atualizacao_email']) ? 'Sim' : 'Não';
    $atualizacao_sms = isset($_POST['atualizacao_email']) ? 'Sim' : 'Não';

    // Formatação das datas
    $startPartyFormatted = formatarDataHora($startParty);
    $endPartyFormatted = formatarDataHora($endParty);

    // Exibindo o cartão de convite
    echo "<div style='width: 300px; border: 2px solid #000; padding: 20px; display: flex; flex-direction: column; justify-content: center; align-items: center; background-color: $cor;'>";
    echo "<h2 style='text-align: center; font-size: 1.5em;'>$titulo</h2>";
    echo "<p><strong>Data Início:</strong> $startPartyFormatted</p>";
    echo "<p><strong>Data Fim:</strong> $endPartyFormatted</p>";
    echo "<p><strong>Tipo:</strong> $tipo</p>";
    echo "<p><strong>Local:</strong> $local</p>";
    echo "<p><strong>Descrição:</strong> $descricao</p>";
    echo "<p><strong>Tema:</strong> $tema</p>";
    echo "<p><strong>Capa:</strong> $fotoCapa</p>";
    echo "<p><strong>Contato:</strong> $nome</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Telefone:</strong> $phone</p>";
    echo "<p><strong>Termos:</strong> $termos</p>";
    echo "<p><strong>Atualização por email:</strong> $atualizacao_email</p>";
    echo "<p><strong>Atualização por SMS:</strong> $atualizacao_sms</p>";
    echo "</div>";
} else {
    echo "Nenhum dado foi enviado.";
}

// Função para formatar a data e hora
function formatarDataHora($dataHora) {
    if (!$dataHora) return "";
    $dataHoraFormatada = new DateTime($dataHora);
    return $dataHoraFormatada->format('d/m/Y H:i:s');
}
?>

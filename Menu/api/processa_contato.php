<?php
// processa_contato.php
header('Content-Type: text/html; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Coletar e sanitizar dados do formulário
    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);
    $assunto = filter_input(INPUT_POST, 'assunto', FILTER_SANITIZE_STRING);
    $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);
    
    // Validações básicas
    if (empty($nome) || empty($email) || empty($mensagem)) {
        die('Por favor, preencha todos os campos obrigatórios.');
    }
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die('E-mail inválido.');
    }
    
    // Preparar dados para mailto:
    $to = 'contato@meuportfolio.com';
    $subject = "Contato do Portfólio: " . rawurlencode($assunto);
    $body = "Nome: $nome%0D%0A";
    $body .= "E-mail: $email%0D%0A";
    $body .= "Telefone: $telefone%0D%0A%0D%0A";
    $body .= "Mensagem:%0D%0A" . rawurlencode($mensagem);
    
    // Redirecionar para mailto:
    header("Location: mailto:$to?subject=$subject&body=$body");
    exit;
    
} else {
    // Se não for POST, redireciona de volta
    header('Location: /portifolio/?page=contato');
    exit;
}
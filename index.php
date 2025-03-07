<?php
// backend.php

// Configuração inicial ou lógica do backend, se necessário
// Você pode processar dados do POST/GET aqui antes de exibir o HTML

// Função para exibir o conteúdo do index.html
function exibirHtml($arquivo) {
    if (file_exists($arquivo)) {
        readfile($arquivo); // Lê e exibe o conteúdo do arquivo HTML
    } else {
        http_response_code(404);
        echo "Erro: Arquivo não encontrado.";
    }
}

// Se for a página inicial, exibe o index.html
exibirHtml('index.html');

// Aqui você pode adicionar outras funções para lidar com requisições
?>

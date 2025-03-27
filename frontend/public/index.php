<?php
// Configurações básicas
require __DIR__ . '/../config/PathManager.php';

// Páginas válidas
$validPages = ['home', 'sobre', 'services', 'contato', 'projetos'];
$page = $_GET['page'] ?? 'home';

// Verifica se a página é válida
if (!in_array($page, $validPages)) {
    $page = 'home';
}

// Carrega os templates
PathManager::requireTemplate('header');

// Carrega o conteúdo da página
try {
    echo '<section class="content">';
    PathManager::requirePage($page);
    echo '</section>';
} catch (Exception $e) {
    echo '<div class="error">Erro ao carregar o conteúdo: ' . $e->getMessage() . '</div>';
}

// Carrega o rodapé
PathManager::requireTemplate('footer');
?>
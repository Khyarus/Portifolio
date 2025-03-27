<?php
// Configurações básicas - caminho relativo ajustado
require __DIR__ . '/../config/PathManager.php';
require __DIR__ . '/../config/AppConfig.php';
// Define o ambiente
define('APP_ENV', getenv('APP_ENV') ?: 'local');
putenv("APP_ENV=" . APP_ENV);

// Páginas válidas
$validPages = ['home', 'sobre', 'services', 'contato', 'projetos', 'testes'];
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
    error_log($e->getMessage());
    if (AppConfig::isProduction()) {
        echo '<div class="error">Ocorreu um erro ao carregar o conteúdo.</div>';
    } else {
        echo '<div class="error">Erro ao carregar o conteúdo: ' . htmlspecialchars($e->getMessage()) . '</div>';
    }
}

// Carrega o rodapé
PathManager::requireTemplate('footer');

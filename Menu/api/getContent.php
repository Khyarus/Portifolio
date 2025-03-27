<?php
require __DIR__ . '/../../config/PathManager.php';
require __DIR__ . '/../../config/AppConfig.php';

$validPages = ['home', 'sobre', 'services', 'contato', 'projetos', 'testes'];
$page = $_GET['page'] ?? 'home';

if (!in_array($page, $validPages)) {
    $page = 'home';
}

try {
    ob_start();
    PathManager::requirePage($page);
    echo ob_get_clean();
} catch (Exception $e) {
    http_response_code(500);
    echo '<div class="error">Erro ao carregar o conteúdo</div>';
}
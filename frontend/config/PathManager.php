<?php
class PathManager {
    private static $basePath;
    private static $frontendPath;
    private static $templatesPath;
    private static $pagesPath;

    public static function init() {
        // Ajuste para sua estrutura específica
        self::$basePath = dirname(__DIR__, 2); // Aponte para Portifolio
        self::$frontendPath = self::$basePath . '/frontend';
        self::$templatesPath = self::$frontendPath . '/templates';
        self::$pagesPath = self::$basePath . '/Menu/api';
        
        // Debug - verifique se os caminhos estão corretos
        self::validatePaths();
    }

    private static function validatePaths() {
        if (!is_dir(self::$templatesPath)) {
            throw new Exception("Templates path not found: " . self::$templatesPath);
        }
        if (!is_dir(self::$pagesPath)) {
            throw new Exception("Pages path not found: " . self::$pagesPath);
        }
    }

    public static function getBasePath() {
        return self::$basePath;
    }

    public static function getTemplatesPath() {
        return self::$templatesPath;
    }

    public static function getPagesPath() {
        return self::$pagesPath;
    }

    public static function requireTemplate($templateName) {
        $path = self::$templatesPath . '/' . $templateName . '.php';
        if (!file_exists($path)) {
            throw new Exception("Template not found: " . $path);
        }
        require $path;
    }

    public static function requirePage($pageName) {
        $path = self::$pagesPath . '/' . $pageName . '.php';
        if (!file_exists($path)) {
            throw new Exception("Page not found: " . $path);
        }
        require $path;
    }
}

// Inicializa a classe com tratamento de erros
try {
    PathManager::init();
} catch (Exception $e) {
    die("Initialization error: " . $e->getMessage());
}
?>
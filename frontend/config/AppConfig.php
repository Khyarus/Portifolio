<?php
class AppConfig {
    private static $environment;
    
    public static function init() {
        self::$environment = getenv('APP_ENV') ?: 'local';
    }
    
    public static function isProduction() {
        return self::$environment === 'production';
    }
    
    public static function getEnvironment() {
        return self::$environment;
    }
}

// Inicializa automaticamente
AppConfig::init();
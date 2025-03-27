<?php
class DatabaseConfig {
    // Configurações para ambiente local (desenvolvimento)
    const LOCAL = [
        'host' => 'localhost',
        'dbname' => 'seu_portfolio',
        'username' => 'root',
        'password' => '',
        'charset' => 'utf8mb4'
    ];
    
    // Configurações para ambiente de produção
    const PRODUCTION = [
        'host' => 'seu.servidor.com',
        'dbname' => 'usuario_portfolio',
        'username' => 'usuario_db',
        'password' => 'senha_segura',
        'charset' => 'utf8mb4'
    ];
    
    public static function getConfig($environment = 'local') {
        return $environment === 'production' ? self::PRODUCTION : self::LOCAL;
    }
}
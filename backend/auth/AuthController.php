<?php
require_once __DIR__ . '/../config/database.php';

class AuthController {
    private $db;

    public function __construct() {
        $this->db = new PDO(
            'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
            DB_USER,
            DB_PASS
        );
    }

    public function login($email, $password) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && password_verify($password, $user['password'])) {
            // Gerar token JWT (simplificado)
            $token = base64_encode(json_encode([
                'id' => $user['id'],
                'email' => $user['email'],
                'exp' => time() + 3600 // Expira em 1 hora
            ]));
            
            return ['token' => $token];
        }

        return null;
    }
}
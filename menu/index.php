<?php
// Definir título da página
$titulo = "Meu Portfólio";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1><?php echo $titulo; ?></h1>
        <nav>
            <ul>
                <li><a href="#sobre">Sobre</a></li>
                <li><a href="#projetos">Projetos</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="#login">Login</a></li>
            </ul>
        </nav>
    </header>
    
    <section id="sobre">
        <h2>Sobre Mim</h2>
        <p>Sou um desenvolvedor apaixonado por tecnologia...</p>
    </section>
    
    <section id="projetos">
        <h2>Meus Projetos</h2>
        <div class="projeto">
            <h3>Projeto 1</h3>
            <p>Descrição do projeto...</p>
        </div>
    </section>
    
    <section id="contato">
        <h2>Contato</h2>
        <form method="POST" action="processa_contato.php">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            
            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" required></textarea>
            
            <button type="submit">Enviar</button>
        </form>
    </section>
    
    <section id="login">
        <h2>Login</h2>
        <form method="POST" action="processa_login.php">
            <label for="username">Usuário:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Senha:</label>
            <input type="password" id="password" name="password" required>
            
            <button type="submit">Entrar</button>
        </form>
    </section>
    
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Meu Nome. Todos os direitos reservados.</p>
    </footer>
</body>
</html>

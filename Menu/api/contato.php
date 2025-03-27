<?php
// Inclui o CSS compartilhado
echo '<link rel="stylesheet" href="/portifolio/Menu/api/portfolio.css">';
// Inclui o CSS específico da página de contato
echo '<link rel="stylesheet" href="/portifolio/Menu/api/contact.css">';
?>

<section class="contact-container">
    <div class="contact-header">
        <h1>Entre em Contato</h1>
        <p class="subtitle">Estou disponível para novos projetos e oportunidades</p>
    </div>

    <div class="contact-grid">
        <!-- Formulário de Contato -->
        <div class="contact-form">
            <h2>Mande uma mensagem</h2>
            <form action="/portifolio/Menu/api/processa_contato.php" method="post">
                <div class="form-group">
                    <label for="nome">Nome Completo</label>
                    <input type="text" id="nome" name="nome" required>
                </div>
                
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>
                
                <div class="form-group">
                    <label for="telefone">Telefone</label>
                    <input type="tel" id="telefone" name="telefone">
                </div>
                
                <div class="form-group">
                    <label for="assunto">Assunto</label>
                    <select id="assunto" name="assunto" required>
                        <option value="">Selecione...</option>
                        <option value="orcamento">Orçamento</option>
                        <option value="trabalho">Oportunidade de Trabalho</option>
                        <option value="duvida">Dúvida</option>
                        <option value="outro">Outro</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <label for="mensagem">Mensagem</label>
                    <textarea id="mensagem" name="mensagem" rows="5" required></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
            </form>
        </div>

        <!-- Informações de Contato -->
        <div class="contact-info">
            <h2>Outras Formas de Contato</h2>
            
            <div class="contact-method">
                <div class="contact-icon">📧</div>
                <h3>E-mail</h3>
                <p>pugderpy@gmail.com</p>
                <a href="mailto:pugderpy@gmail.com" class="btn btn-secondary">Enviar E-mail</a>
            </div>
            
            <div class="contact-method">
                <div class="contact-icon">📱</div>
                <h3>WhatsApp</h3>
                <p>(55) 43 99124-1391</p>
                <a href="https://wa.me/5543991241391" target="_blank" class="btn btn-secondary">Enviar Mensagem</a>
            </div>
            
            <div class="contact-method">
                <div class="contact-icon">💼</div>
                <h3>LinkedIn</h3>
                <p>linkedin.com/in/meu-perfil</p>
                <a href="https://www.linkedin.com/in/jo%C3%A3o-gabriel-cansi-silveira/" target="_blank" class="btn btn-secondary">Ver Perfil</a>
            </div>
        </div>
    </div>
</section>
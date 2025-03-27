<?php
// Inclui o CSS compartilhado
echo '<link rel="stylesheet" href="/portifolio/Menu/api/portfolio.css">';
// Inclui o CSS específico para projetos
echo '<link rel="stylesheet" href="/portifolio/Menu/api/projetos.css">';
?>

<section class="projects-container">
    <h1>Meus Projetos</h1>
    <p class="subtitle">Alguns dos trabalhos que realizei</p>

    <div class="projects-grid">
        <!-- Projeto 1 -->
        <div class="project-card">
            <div class="project-image">
                <img src="/portifolio/assets/projeto1.png" alt="Projeto 1">
            </div>
            <div class="project-info">
                <h2>Website Portifolio</h2>
                <p>Desenvolvimento completo de website responsivo para portifolio, e uso pessoal.</p>
                <div class="project-tags">
                    <span>HTML/CSS</span>
                    <span>JavaScript</span>
                    <span>PHP</span>
                </div>
                <a href="#" class="btn btn-primary">Ver Detalhes</a>
            </div>
        </div>

        <!-- Projeto 2
        <div class="project-card">
            <div class="project-image">
                <img src="/portifolio/assets/projeto2.jpg" alt="Projeto 2">
            </div>
            <div class="project-info">
                <h2>Aplicativo Mobile</h2>
                <p>Aplicativo de gerenciamento de tarefas desenvolvido com React Native.</p>
                <div class="project-tags">
                    <span>React Native</span>
                    <span>Firebase</span>
                </div>
                <a href="#" class="btn btn-primary">Ver Detalhes</a>
            </div>
        </div> -->

        <!-- Projeto 3
        <div class="project-card">
            <div class="project-image">
                <img src="/portifolio/assets/projeto3.jpg" alt="Projeto 3">
            </div>
            <div class="project-info">
                <h2>E-commerce</h2>
                <p>Loja virtual com sistema de pagamento integrado e painel administrativo.</p>
                <div class="project-tags">
                    <span>WordPress</span>
                    <span>WooCommerce</span>
                    <span>PHP</span>
                </div>
                <a href="#" class="btn btn-primary">Ver Detalhes</a>
            </div>
        </div> -->
    </div>
</section>
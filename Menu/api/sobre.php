<?php
// Inclui o CSS compartilhado
echo '<link rel="stylesheet" href="/portifolio/Menu/api/portfolio.css">';
// Inclui o CSS específico para a página Sobre
echo '<link rel="stylesheet" href="/portifolio/Menu/api/sobre.css">';
?>

<section class="about-container">
<div class="about-header">
    <h2>Sobre Mim</h2>
    <h1 class="section-subtitle">Minha jornada, habilidades e experiência profissional</h1>
</div>
        
    </d>

    <div class="about-content">
        <!-- Seção de Perfil -->
        <div class="profile-card">
            <div class="profile-image">
                <img src="/portifolio/assets/foto-perfil.jpg" alt="Minha Foto">
            </div>
            <div class="profile-info">
                <h2>Olá, eu sou <span class="highlight">[João Gabriel Cansi Silveira]</span></h2>
                <p class="profile-title">[Desenvolvedor]</p>
                <div class="profile-social">
                    <a href="https://www.linkedin.com/in/jo%C3%A3o-gabriel-cansi-silveira/" class="social-link">LinkedIn</a>
                    <a href="https://github.com/Khyarus" class="social-link">GitHub</a>
                    <a href="https://github.com/Khyarus/Portifolio" class="social-link">Currículo</a>
                </div>
            </div>
        </div>

        <!-- Seção de Experiência -->
        <div class="experience-section">
            <h2><span class="section-icon">💼</span> Experiência Profissional</h2>
            
            <div class="timeline">
                <div class="timeline-item">
                    <div class="timeline-date">nov 2024 - Presente</div>
                    <div class="timeline-content">
                        <h3>Estagiário de desenvolvimento </h3>
                        <p class="company">Bellinati Perez</p>
                        <p>Desenvolvimento, N1 e N3 caso disponibilidade. Principalmente atuando com sistema ADM, PHP JS e HTML.</p>
                    </div>
                </div>
                
                <div class="timeline-item">
                    <div class="timeline-date">abr 2024 - nov 2024</div>
                    <div class="timeline-content">
                        <h3>Tecnico de TI</h3>
                        <p class="company">Bellinati Perez </p>
                        <p>Atuando como Tecnico de T.I junior, responsavel por service desk e tendimento de Filial, suporte e manutenções.</p>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-date">mar 2024 - mar 2024</div>
                    <div class="timeline-content">
                        <h3>Tecnico de TI Estagiário</h3>
                        <p class="company">Bellinati Perez </p>
                        <p>Atuando como Tecnico de T.I estagiário, responsavel por service desk e tendimento de Filial, suporte e manutenções.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Seção de Habilidades -->
        <div class="skills-section">
            <h2><span class="section-icon">🛠️</span> Habilidades Técnicas</h2>
            
            <div class="skills-grid">
                <div class="skill-category">
                    <h3>Front-end</h3>
                    <ul class="skills-list">
                        <li>HTML/CSS</li>
                        <li>JavaScript (ES6+)</li>
                        <li>Vue.js</li>
                        <li>Responsive Design</li>
                    </ul>
                </div>
                
                <div class="skill-category">
                    <h3>Back-end</h3>
                    <ul class="skills-list">
                        <li>PHP</li>
                        <li>MySQL</li>
                    </ul>
                </div>
                
                <div class="skill-category">
                    <h3>Ferramentas</h3>
                    <ul class="skills-list">
                        <li>Git/GitHub</li>
                        <li>RedMine/GLPI</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
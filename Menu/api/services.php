<?php
// Inclui o CSS compartilhado
echo '<link rel="stylesheet" href="/portifolio/Menu/api/portfolio.css">';
// Inclui o CSS específico para serviços
echo '<link rel="stylesheet" href="/portifolio/Menu/api/services.css">';
?>

<section class="services-container">
    <div class="services-header">
        <h1>Meus Serviços</h1>
        <h2 class="section-subtitle">Soluções técnicas completas para seu equipamento</h2>
    </div>

    <div class="services-grid">
        <!-- Serviço 1 -->
        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-broom"></i>
            </div>
            <div class="service-content">
                <h3>Limpeza Completa de PCs</h3>
                <ul class="service-features">
                    <li>Remoção completa de poeira e sujeira</li>
                    <li>Limpeza interna e externa</li>
                    <li>Substituição de pasta térmica</li>
                    <li>Organização de cabos internos</li>
                </ul>
            </div>
        </div>

        <!-- Serviço 2 -->
        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-tools"></i>
            </div>
            <div class="service-content">
                <h3>Manutenções em Geral</h3>
                <ul class="service-features">
                    <li>Diagnóstico completo de hardware</li>
                    <li>Substituição de componentes</li>
                    <li>Reparo de placas e conexões</li>
                    <li>Otimização de desempenho</li>
                </ul>
            </div>
        </div>

        <!-- Serviço 3 -->
        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-redo"></i>
            </div>
            <div class="service-content">
                <h3>Formatação de Máquinas</h3>
                <ul class="service-features">
                    <li>Formatação completa e segura</li>
                    <li>Instalação de sistemas operacionais</li>
                    <li>Backup de arquivos importantes</li>
                    <li>Instalação de drivers e softwares</li>
                </ul>
            </div>
        </div>

        <!-- Novo Serviço 4 - Análise e Upgrade -->
        <div class="service-card">
            <div class="service-icon">
                <i class="fas fa-chart-line"></i>
            </div>
            <div class="service-content">
                <h3>Análise e Upgrade de Máquinas</h3>
                <ul class="service-features">
                    <li>Avaliação completa do hardware</li>
                    <li>Recomendações de melhorias</li>
                    <li>Upgrade de componentes</li>
                    <li>Relatório de compatibilidade</li>
                    <li>Otimização custo-benefício</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="service-cta">
        <p>Precisa de algum desses serviços ou tem dúvidas?</p>
        <a href="?page=contato" class="btn btn-primary">Entre em Contato</a>
    </div>
</section>

<!-- Adicione Font Awesome para os ícones -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
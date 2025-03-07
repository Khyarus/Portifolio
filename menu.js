// Função para mostrar o conteúdo centralizado
function abrirJanela(secao) {
    var fundo = document.getElementById('fundo-escuro');
    var janela = document.getElementById('janela');
    var conteudo = document.getElementById('conteudo-janelas');
    
    // Limpar o conteúdo atual e carregar o conteúdo da seção selecionada
    conteudo.innerHTML = document.querySelector(secao).innerHTML;

    // Ativar a animação do fundo escuro
    fundo.classList.add('show');
    
    // Mostrar a janela com animação
    janela.style.display = 'block';

    // Adicionar eventos para fechar a janela
    fundo.addEventListener('click', fecharJanela); // Fechar ao clicar fora
    document.addEventListener('keydown', verificarTecla); // Fechar ao pressionar a tecla Esc
}

// Função para fechar a janela e esconder o fundo escuro
function fecharJanela() {
    var fundo = document.getElementById('fundo-escuro');
    var janela = document.getElementById('janela');
    
    // Remover a animação e esconder
    fundo.classList.remove('show');
    janela.style.display = 'none';

    // Remover eventos para evitar múltiplos ouvintes
    fundo.removeEventListener('click', fecharJanela);
    document.removeEventListener('keydown', verificarTecla);
}

// Função para verificar a tecla pressionada
function verificarTecla(event) {
    if (event.key === 'Escape') { // Verifica se a tecla pressionada foi a tecla "Esc"
        fecharJanela();
    }
}

// Adicionar eventos aos links de navegação
document.querySelector('a[href="#sobre"]').addEventListener('click', function(event) {
    event.preventDefault();
    abrirJanela('#sobre');
});

document.querySelector('a[href="#projetos"]').addEventListener('click', function(event) {
    event.preventDefault();
    abrirJanela('#projetos');
});

document.querySelector('a[href="#contato"]').addEventListener('click', function(event) {
    event.preventDefault();
    abrirJanela('#contato');
});

document.querySelector('a[href="#login"]').addEventListener('click', function(event) {
    event.preventDefault();
    abrirJanela('#login');
});

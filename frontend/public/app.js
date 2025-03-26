const { createApp, ref, computed } = Vue;

createApp({
    setup() {
        const currentPage = ref(window.location.pathname.substring(1) || 'home');
        
        const menuItems = ref({
            'home': 'Home',
            'sobre': 'Sobre',
            'services': 'Serviços',
            'contato': 'Contato'
        });

        const navigateTo = (page) => {
            currentPage.value = page;
            window.history.pushState({}, '', `/${page}`);
            // Dispara evento para que o PHP saiba que a página mudou
            window.dispatchEvent(new PopStateEvent('popstate'));
        };

        // Atualiza quando navega pelo browser (frente/voltar)
        window.addEventListener('popstate', () => {
            currentPage.value = window.location.pathname.substring(1) || 'home';
        });

        return { currentPage, menuItems, navigateTo };
    }
}).mount('#app');
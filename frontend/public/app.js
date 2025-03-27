const { createApp, ref } = Vue;

document.addEventListener('DOMContentLoaded', () => {
    createApp({
        setup() {
            // Obtém a página atual da URL
            const getCurrentPage = () => {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.get('page') || 'home';
            };

            const currentPage = ref(getCurrentPage());
            
            const menuItems = ref({
                'home': 'Home',
                'sobre': 'Sobre', 
                'services': 'Serviços',
                'contato': 'Contato',
                
            });

            const navigateTo = (page) => {
                currentPage.value = page;
                window.history.pushState({}, '', `?page=${page}`);
                window.dispatchEvent(new PopStateEvent('popstate'));
            };

            // Atualiza quando navega pelo browser (frente/voltar)
            window.addEventListener('popstate', () => {
                currentPage.value = getCurrentPage();
            });

            return { 
                currentPage,
                menuItems,
                navigateTo
            };
        }
    }).mount('#app');
});
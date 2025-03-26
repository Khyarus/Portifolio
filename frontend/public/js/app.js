document.addEventListener('DOMContentLoaded', () => {
    const { createApp, ref, onMounted } = Vue;

    const app = createApp({
        setup() {
            // Obtém a página atual da URL
            const getCurrentPage = () => {
                const urlParams = new URLSearchParams(window.location.search);
                return urlParams.get('page') || 'home';
            };

            const activeSection = ref(getCurrentPage());
            
            const menuItems = ref([
                { id: 'home', title: 'Home' },
                { id: 'sobre', title: 'Sobre' },
                { id: 'services', title: 'Serviços' },
                { id: 'contato', title: 'Contato' }
            ]);

            // Manipula a navegação
            const handleNavigation = (sectionId) => {
                activeSection.value = sectionId;
                window.history.pushState({}, '', `?page=${sectionId}`);
            };

            // Observa mudanças na URL
            onMounted(() => {
                window.addEventListener('popstate', () => {
                    activeSection.value = getCurrentPage();
                });
            });

            return { 
                activeSection,
                menuItems,
                handleNavigation
            };
        }
    });

    app.mount('#app');
});
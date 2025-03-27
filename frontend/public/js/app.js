document.addEventListener('DOMContentLoaded', () => {
    const { createApp, ref } = Vue;

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
                { id: 'contato', title: 'Contato' },
                { id: 'projetos', title: 'Projetos' },
                { id: 'testes', title: 'Testes' }
            ]);

            // Método para carregar conteúdo via AJAX
            const loadContent = async (page) => {
                try {
                    const response = await fetch(`/api/getContent.php?page=${page}`);
                    return await response.text();
                } catch (error) {
                    console.error('Erro ao carregar conteúdo:', error);
                    return '<p>Erro ao carregar conteúdo</p>';
                }
            };

            // Manipula a navegação (versão SPA)
            const handleNavigation = async (sectionId, event) => {
                event.preventDefault();
                activeSection.value = sectionId;
                const content = await loadContent(sectionId);
                document.querySelector('.content').innerHTML = content;
                window.history.pushState({}, '', `?page=${sectionId}`);
            };

            // Carrega o conteúdo inicial
            onMounted(async () => {
                const initialContent = await loadContent(getCurrentPage());
                document.querySelector('.content').innerHTML = initialContent;
                
                window.addEventListener('popstate', async () => {
                    const page = getCurrentPage();
                    activeSection.value = page;
                    const content = await loadContent(page);
                    document.querySelector('.content').innerHTML = content;
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
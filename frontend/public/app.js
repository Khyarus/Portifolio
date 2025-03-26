const { createApp } = Vue;

createApp({
    data() {
        return {
            message: 'Hello World from Vue.js!',
            backendMessage: ''
        }
    },
    mounted() {
        fetch('backend/api/hello.php')
            .then(response => {
                if (!response.ok) throw new Error('Erro na rede');
                return response.json();
            })
            .then(data => {
                this.backendMessage = data.message;
            })
            .catch(error => {
                console.error('Erro ao conectar com o backend:', error);
                this.backendMessage = 'Erro ao conectar com o backend';
            });
    }
}).mount('#app');
<template>
    <div class="home">
      <!-- Cabeçalho Hero -->
      <section class="hero">
        <div class="hero-content">
          <h1>Olá, eu sou [Seu Nome]</h1>
          <p class="subtitle">Desenvolvedor Web | Especialista em Vue.js e PHP</p>
          <div class="cta-buttons">
            <router-link to="/projects" class="btn btn-primary">Ver Meus Projetos</router-link>
            <a href="#contact" class="btn btn-secondary">Contato</a>
          </div>
        </div>
      </section>
  
      <!-- Sobre Mim -->
      <section class="about">
        <h2>Sobre Mim</h2>
        <div class="about-content">
          <div class="about-text">
            <p>Texto breve sobre sua experiência, habilidades e paixão por desenvolvimento.</p>
            <p>Destaque seus pontos fortes e o que diferencia seu trabalho.</p>
          </div>
          <div class="skills">
            <h3>Minhas Habilidades</h3>
            <div class="skills-grid">
              <div class="skill" v-for="(skill, index) in skills" :key="index">
                <span class="skill-icon">{{ skill.icon }}</span>
                <span class="skill-name">{{ skill.name }}</span>
              </div>
            </div>
          </div>
        </div>
      </section>
  
      <!-- Projetos em Destaque -->
      <section class="featured-projects">
        <h2>Projetos em Destaque</h2>
        <div class="projects-grid">
          <div class="project-card" v-for="project in featuredProjects" :key="project.id">
            <img :src="project.image" :alt="project.title" class="project-image">
            <h3>{{ project.title }}</h3>
            <p>{{ project.description }}</p>
            <a :href="project.link" target="_blank" class="btn btn-small">Ver Projeto</a>
          </div>
        </div>
        <router-link to="/projects" class="btn btn-primary">Ver Todos os Projetos</router-link>
      </section>
  
      <!-- Contato -->
      <section id="contact" class="contact">
        <h2>Entre em Contato</h2>
        <form @submit.prevent="sendMessage" class="contact-form">
          <div class="form-group">
            <label for="name">Nome</label>
            <input v-model="contact.name" type="text" id="name" required>
          </div>
          <div class="form-group">
            <label for="email">Email</label>
            <input v-model="contact.email" type="email" id="email" required>
          </div>
          <div class="form-group">
            <label for="message">Mensagem</label>
            <textarea v-model="contact.message" id="message" rows="5" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Enviar Mensagem</button>
        </form>
      </section>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        skills: [
          { icon: '🖥️', name: 'Vue.js' },
          { icon: '💾', name: 'PHP' },
          { icon: '🗃️', name: 'MySQL' },
          { icon: '🎨', name: 'UI/UX Design' },
          { icon: '📱', name: 'Responsive Design' },
          { icon: '🔧', name: 'API REST' }
        ],
        featuredProjects: [
          {
            id: 1,
            title: 'Sistema de Portfólio',
            description: 'Este site que você está vendo agora!',
            image: '/images/portfolio-project.jpg',
            link: '#'
          },
          {
            id: 2,
            title: 'Aplicativo de Tarefas',
            description: 'Um app para gerenciamento de tarefas diárias',
            image: '/images/todo-app.jpg',
            link: '#'
          }
        ],
        contact: {
          name: '',
          email: '',
          message: ''
        }
      }
    },
    methods: {
      async sendMessage() {
        try {
          // Aqui você pode implementar o envio para o backend
          console.log('Mensagem enviada:', this.contact);
          alert('Mensagem enviada com sucesso!');
          this.contact = { name: '', email: '', message: '' };
        } catch (error) {
          console.error('Erro ao enviar mensagem:', error);
          alert('Ocorreu um erro ao enviar sua mensagem.');
        }
      }
    }
  }
  </script>
  
  <style scoped>
  .home {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
  }
  
  .hero {
    background: linear-gradient(135deg, #6e8efb, #a777e3);
    color: white;
    padding: 80px 20px;
    text-align: center;
    border-radius: 10px;
    margin-bottom: 40px;
  }
  
  .hero-content h1 {
    font-size: 2.5rem;
    margin-bottom: 10px;
  }
  
  .subtitle {
    font-size: 1.2rem;
    margin-bottom: 30px;
  }
  
  .cta-buttons {
    display: flex;
    justify-content: center;
    gap: 15px;
  }
  
  .btn {
    padding: 10px 20px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    transition: all 0.3s ease;
  }
  
  .btn-primary {
    background: white;
    color: #6e8efb;
  }
  
  .btn-secondary {
    background: transparent;
    color: white;
    border: 2px solid white;
  }
  
  .btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }
  
  section {
    margin-bottom: 60px;
  }
  
  h2 {
    font-size: 2rem;
    margin-bottom: 30px;
    text-align: center;
  }
  
  .about-content {
    display: flex;
    gap: 40px;
    align-items: center;
  }
  
  .about-text {
    flex: 2;
  }
  
  .skills {
    flex: 1;
  }
  
  .skills-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 15px;
  }
  
  .skill {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px;
    background: #f5f5f5;
    border-radius: 5px;
  }
  
  .projects-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
    gap: 30px;
    margin-bottom: 30px;
  }
  
  .project-card {
    border: 1px solid #eee;
    border-radius: 8px;
    overflow: hidden;
    transition: transform 0.3s ease;
    padding: 20px;
  }
  
  .project-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
  }
  
  .project-image {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 5px;
    margin-bottom: 15px;
  }
  
  .contact-form {
    max-width: 600px;
    margin: 0 auto;
  }
  
  .form-group {
    margin-bottom: 20px;
  }
  
  .form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  
  .form-group input,
  .form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 1rem;
  }
  
  textarea {
    resize: vertical;
  }
  
  @media (max-width: 768px) {
    .about-content {
      flex-direction: column;
    }
    
    .hero-content h1 {
      font-size: 2rem;
    }
    
    .subtitle {
      font-size: 1rem;
    }
  }
  </style>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Portfólio</title>
    <!-- Carrega Vue.js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Nosso arquivo JS -->
    <script src="./js/app.js" defer></script>
    <link rel="stylesheet" href="../public/styles.css">
</head>
<body>
    <div id="app">
        <!-- Menu permanente -->
        <header class="main-header">
            <h1>PORTFÓLIO</h1>
            <nav>
                <ul class="main-menu">
                    <li v-for="item in menuItems" :key="item.id">
                        <a :href="'?page=' + item.id" 
                           @click="handleNavigation(item.id)"
                           :class="{ active: activeSection === item.id }">
                            {{ item.title }}
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <!-- Área de conteúdo -->
        <main class="main-content">
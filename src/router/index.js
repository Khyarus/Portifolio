import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import Projects from '../views/Projects.vue'
import Login from '../views/Login.vue'

const routes = [
  { path: '/', component: Home },
  { path: '/projects', component: Projects, meta: { requiresAuth: true } },
  { path: '/login', component: Login }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

// Middleware de autenticação
router.beforeEach((to, from, next) => {
  const requiresAuth = to.matched.some(record => record.meta.requiresAuth)
  const isAuthenticated = localStorage.getItem('token')
  
  if (requiresAuth && !isAuthenticated) {
    next('/login')
  } else {
    next()
  }
})

export default router
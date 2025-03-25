import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue' // Note o H maiúsculo

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  }
]

const router = createRouter({
  history: createWebHistory(),
  routes
})

export default router
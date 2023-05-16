import {createRouter, createWebHistory} from 'vue-router'
import Home from '@/views/main/Index.vue'

export default createRouter({
    // history: createWebHistory(process.env.BASE_URL),
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home,
        },
        {
            path: '/products',
            name: 'products',
            component: () => import('@/views/product/Index.vue'),
        },
        {
            path: '/cart',
            name: 'cart',
            component: () => import('@/views/cart/Index.vue'),
        },
        {
            path: '/sign',
            name: 'sign',
            component: () => import('@/views/auth/Sign.vue'),
        },
        {
            path: '/register',
            name: 'register',
            component: () => import('@/views/auth/Register.vue'),
        },

    ],
})

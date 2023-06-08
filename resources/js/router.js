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
            name: 'products.index',
            component: () => import('@/views/product/Index.vue'),
        },
        {
            path: '/products/:id',
            name: 'products.show',
            component: () => import('@/views/product/Show.vue'),
        },
        {
            path: '/cart',
            name: 'cart.index',
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
        {
            path: '/about',
            name: 'about.index',
            component: () => import('@/views/about/Index.vue'),
        },

    ],
})

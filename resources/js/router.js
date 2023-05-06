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

    ],
})

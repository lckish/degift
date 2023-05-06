import {createRouter, createWebHistory} from 'vue-router'
import Home from '@/views/main/Index.vue'

export default createRouter({
    // history: createWebHistory(process.env.BASE_URL),
    history: createWebHistory(),
    routes: [
        {
            path: '/',
            component: Home,
        },
        {
            path: '/products',
            component: () => import('@/views/product/Index.vue'),
        },

    ],
})

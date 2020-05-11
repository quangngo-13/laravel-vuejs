import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

const routes = [
    {
        path: '/',
        name: 'foo',
        component: () => import('../components/auth/login')
    },
    {
        path: '/bar',
        name: 'bar',
        component: () => import('../components/auth/register')
    },
]

export default new VueRouter({
    routes,
})

import Vue from 'vue'
import VueRouter from 'vue-router'
import IndexVue from '@/components/Index.vue'
import DashboardVue from '@/components/Dashboard.vue'


Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    name: 'home',
    component: IndexVue
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "  " */ '../views/AboutView.vue')
  },
  {
    path: '/dashboard',
    name: 'dashboard',
    component:DashboardVue
  }
]

const router = new VueRouter({
  routes
})

export default router

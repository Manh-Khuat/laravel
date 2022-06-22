const Home = () => import('./components/Home.vue')
const Contact = () => import('./components/Contacto.vue')
const Show = () => import('./components/products/show.vue')
const Create = () => import('./components/products/Create.vue')
const Editor = () => import('./components/products/Editor.vue')
export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'Show',
        path: '/products',
        component: Show
    },
    {
        name: 'Create',
        path: '/create',
        component: Create
    },
    {
        name: 'Editor',
        path: '/editor/:id',
        component: Editor
    },
     {
        name: 'contact',
        path: '/contact',
        component: Contact
    }
]

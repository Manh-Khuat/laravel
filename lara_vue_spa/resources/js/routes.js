const Home = () => import('./components/Home.vue')
const Contact = () => import('./components/Contact.vue')
const Show = () => import('./components/products/Show.vue')
const Create = () => import('./components/products/Create.vue')
const Editor = () => import('./components/products/Editor.vue')
export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'ShowBlogs',
        path: '/products',
        component: Show
    },
    {
        name: 'CreateBlog',
        path: '/create',
        component: Create
    },
    {
        name: 'EditorBlog',
        path: '/editor/:id',
        component: Editor
    },
     {
        name: 'contact',
        path: '/contact',
        component: Contact
    }
]

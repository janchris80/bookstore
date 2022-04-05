import {createWebHistory, createRouter} from 'vue-router';
import Dashboard from './components/pages/Dashboard';
import PageNotFound from './components/pages/PageNotFound';
import Book from './components/pages/Book';
import Library from './components/pages/Library';
import Form from './components/auth/Form';
import store from "./store";

export const routes = [
    {
        path: '/:catchAll(.*)',
        component: PageNotFound,
    },
    {
        name: 'login',
        path: '/login',
        component: Form,
        meta: {
            middleware: 'guest',
            title: 'Login Page'
        }
    },
    {
        name: 'dashboard',
        path: '/',
        alias: ['/dashboard', '/home'],
        component: Dashboard,
        meta: {
            middleware: 'auth',
            title: 'Dashboard'
        },
    },
    {
        name: 'book',
        path: '/book',
        component: Book,
        meta: {
            middleware: 'auth',
            title: 'Book List'
        }
    },
    {
        name: 'library',
        path: '/library',
        component: Library,
        meta: {
            middleware: 'auth',
            title: 'Library List'
        }
    }
];

const router = createRouter({
    history: createWebHistory(),
    routes: routes,
});

router.beforeEach((to, from, next) => {
    document.title = `${to.meta.title}`
    if (to.meta.middleware === 'guest') {
        if (store.state.auth.authenticated) {
            return next({path: '/'})
        }
        return next()
    } else {
        if (store.state.auth.authenticated) {
            return next()
        } else {
            return next({name: 'login'})
        }
    }
})

export default router;

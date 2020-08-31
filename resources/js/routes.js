import Home from "./components/Home";
import NotFound from "./components/NotFound";
import Layout from "./components/Layout";

export default {
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Layout,
            children: [
                {
                    path: '',
                    component: Home,
                    name: 'home'
                },
                {
                    path: '*',
                    component: NotFound,
                    name: 'not_found'
                }
            ]
        }
    ]
}

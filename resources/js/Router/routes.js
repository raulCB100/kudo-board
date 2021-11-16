import NotFound from '../Pages/NotFound';
import Board from '../Components/Board';
import Login from '../Components/Login';
import Register from '../Components/Register';
import Home from '../Components/Home';
import Layout from '../Components/layouts/Layout';

const routes = [
    {
        name:"login",
        path:"/login",
        component:Login,
        meta:{
            middleware:"guest",
            title:`Iniciar`
        }
    },
    {
        name:"register",
        path:"/register",
        component:Register,
        meta:{
            middleware:"guest",
            title:`Registrar`
        }
    },
    {
        path:"/",
        component:Layout,
        meta:{
            middleware:"auth"
        },
        children:[
            {
                name:"home",
                path: '/',
                component: Home,
                meta:{
                    title:`Inicio`,
                    breadcrumb:[
                        {name: 'Boards'}
                    ]
                }
            },
            {
                name:"board",
                path: '/board/:boardId',
                component: Board,
                meta:{
                    title:`board`,
                    breadcrumb:[
                        {name: 'Boards',link:'/'},
                        {name: 'Kudo-board'}
                    ]
                }
            }
        ]
    }
]
export default routes;

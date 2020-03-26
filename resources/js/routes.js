import home from "./components/Home.vue";
import login from "./components/Login.vue";
import registro from "./components/Registro.vue";

export const routes = [
    {path: "/", component: home},
    {path: "/login", component: login},
    {path: "/registro", component: registro},
];
import Vue from "vue";
import VueRouter from "vue-router";
Vue.use(VueRouter);

import HomeComponent from "./components/Home";

const routes = [
    {
        path: "/",
        name: "home",
        component: HomeComponent
    }
];

export default new VueRouter({
    mode: "history",
    routes
});

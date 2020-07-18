require("./bootstrap");
window.Vue = require("vue");

import VueAxios from "vue-axios";
import axios from "axios";
import BootstrapVue from "bootstrap-vue";

import router from "./router";

Vue.use(BootstrapVue);
Vue.use(VueAxios, axios);

Vue.component("main-app", require("./components/MainApp").default);

const app = new Vue({
    el: "#app",
    router
});

require('./bootstrap');
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
window.Vue = require('vue').default;
/*
    Bootstrap Vue
 */

//Vue-Bootstrap
import {
    TableLitePlugin,
    IconsPlugin,
    NavbarPlugin,
    FormPlugin,
    FormCheckboxPlugin,
    FormGroupPlugin,
    FormRadioPlugin,
    FormSelectPlugin,
    AlertPlugin,
    ModalPlugin,
    LinkPlugin,
    ListGroupPlugin,
    CardPlugin,
    ButtonPlugin,
    FormTextareaPlugin,
    FormRatingPlugin,
    BadgePlugin,
    ButtonGroupPlugin
} from 'bootstrap-vue'


//Bootstrap Vue Components
Vue.use(TableLitePlugin)
Vue.use(NavbarPlugin)
Vue.use(FormPlugin)
Vue.use(FormCheckboxPlugin)
Vue.use(FormGroupPlugin)
Vue.use(FormRadioPlugin)
Vue.use(FormSelectPlugin)
Vue.use(AlertPlugin)
Vue.use(ModalPlugin)
Vue.use(LinkPlugin)
Vue.use(ListGroupPlugin)
Vue.use(CardPlugin)
Vue.use(ButtonPlugin)
Vue.use(FormTextareaPlugin)
Vue.use(FormRatingPlugin)
Vue.use(BadgePlugin)
Vue.use(ButtonGroupPlugin)

//import 'bootstrap/dist/css/bootstrap.css'
//import 'bootstrap-vue/dist/bootstrap-vue.css'

import Layout from './components/layout/Layout';
import router from "./routes";
import axios from 'axios'
import VueRouter from 'vue-router';
import VueAxios from "vue-axios";
axios.defaults.baseURL = '/api/v1/'
Vue.use(VueAxios,axios);

// Set Vue router
Vue.router = router
Vue.use(VueRouter)
const app = new Vue({
    el: '#app',
    components: {Layout},
    router: router
});

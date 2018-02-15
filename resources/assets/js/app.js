
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import Vue from 'vue'
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Home from './components/HomeComponent.vue'
import Info from './components/InfoComponent.vue'
import Modal from './components/ModalComponent.vue'

Vue.component('info', Info)
Vue.component('modal', Modal)

const app = new Vue({
    el: '#app',
    render: r => r(Home),
});

try {
    window.$app = Home
    window.$cascade = Info
    window.$modal = Modal
} catch (e) {}
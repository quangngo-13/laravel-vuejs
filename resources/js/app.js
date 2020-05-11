import Vue from 'vue';
import router from "./router/router";

import app from '../js/App.vue'


new Vue({
    el: '#app',
    router,
    render: h => h(app),
});

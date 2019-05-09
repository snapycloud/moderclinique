require('./bootstrap')

window.Vue = require('vue');

Vue.component('consultation-component', require('./components/ConsultationComponent.vue').default);

const app = new Vue({
    el: '#app',
});

require('./bootstrap')

window.Vue = require('vue');

Vue.component('consultation-component', require('./components/ConsultationComponent.vue').default);
Vue.component('consultation-modal', require('./components/ConsultationModal.vue').default);

const app = new Vue({
    el: '#app',
});

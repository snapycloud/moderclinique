require('./bootstrap')

window.Vue = require('vue');

Vue.component('consultation-component', require('./components/ConsultationComponent.vue').default);
Vue.component('comment', require('./components/CommentComponent.vue').default);
Vue.component('case-component', require('./components/CaseComponent.vue').default);
Vue.component('consultation-modal', require('./components/ConsultationModal.vue').default);
Vue.component('case-modal', require('./components/CaseModal.vue').default);
Vue.component('contact-modal', require('./components/ContactModal.vue').default);

const app = new Vue({
    el: '#app',
});

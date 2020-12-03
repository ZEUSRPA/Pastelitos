/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import locale from 'element-ui/lib/locale/lang/es'

window.Vue = require('vue');
Vue.use(ElementUI,{locale});


/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('cakes-index', require('./components/Cakes/IndexComponent.vue').default);
Vue.component('cakes-details', require('./components/Cakes/DetailsComponent.vue').default);
Vue.component('cakes-create-edit', require('./components/Cakes/CreateEditComponent.vue').default);

Vue.component('clients-index', require('./components/Clients/IndexComponent.vue').default);
Vue.component('clients-details', require('./components/Clients/DetailsComponent.vue').default);
Vue.component('clients-create-edit', require('./components/Clients/CreateEditComponent.vue').default);

Vue.component('employees-index', require('./components/Employees/IndexComponent.vue').default);
Vue.component('employees-details', require('./components/Employees/DetailsComponent.vue').default);
Vue.component('employees-create-edit', require('./components/Employees/CreateEditComponent.vue').default);

Vue.component('coupons-index', require('./components/Coupons/IndexComponent.vue').default);
Vue.component('coupons-details', require('./components/Coupons/DetailsComponent.vue').default);
Vue.component('coupons-create-edit', require('./components/Coupons/CreateEditComponent.vue').default);

Vue.component('sales-index', require('./components/Sales/IndexComponent.vue').default);
Vue.component('sales-details', require('./components/Sales/DetailsComponent.vue').default);
Vue.component('sales-create-edit', require('./components/Sales/CreateEditComponent.vue').default);

Vue.component('devolutions-index', require('./components/Devolutions/IndexComponent.vue').default);
Vue.component('devolutions-details', require('./components/Devolutions/DetailsComponent.vue').default);
Vue.component('devolutions-create-edit', require('./components/Devolutions/CreateEditComponent.vue').default);

Vue.component('orders-index', require('./components/Orders/IndexComponent.vue').default);
Vue.component('orders-details', require('./components/Orders/DetailsComponent.vue').default);
Vue.component('orders-create-edit', require('./components/Orders/CreateEditComponent.vue').default);

Vue.component('sidebar-menu-component', require('./components/Menus/SideBarMenu.vue').default);
Vue.component('sidebar-menu-component-guest', require('./components/Menus/SideBarMenuGuest.vue').default);

Vue.component('topbar-menu-component', require('./components/Menus/TopBarMenu.vue').default);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

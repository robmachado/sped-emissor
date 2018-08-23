
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.swal = require('sweetalert2');
window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('tabela', require('./components/Tabela.vue'));
Vue.component('cnpj-cpf', require('./components/CnpjCpf.vue'));
Vue.component('texto', require('./components/Texto.vue'));
Vue.component('selecao', require('./components/Selecao.vue'));
Vue.component('arq-upload', require('./components/ArqUpload.vue'));
Vue.component('campo-data', require('./components/CampoData.vue'));

const app = new Vue({
  el: '#app',
  computed: {
    cardWidth() {
      let cardWidth = document.getElementsByClassName('card-body');
      return cardWidth ? cardWidth[0].clientWidth - 40 : 0;
    }
  },
  mounted() {
    const paginas = document.getElementById('paginas');
    if (paginas) {
      paginas.style.marginTop = '10px';
    }
  }
});

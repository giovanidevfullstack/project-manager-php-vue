import Vue from 'vue'
import App from './App'
import router from './router'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import 'material-design-icons-iconfont/dist/material-design-icons.css'

Vue.config.productionTip = false

Vue.use(Vuetify);

/* eslint-disable no-new */ 
new Vue({
  vuetify: new Vuetify(),
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
})

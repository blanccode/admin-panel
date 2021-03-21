require('./bootstrap');

// import App from './component/App';

// import { createApp, h } from 'vue'
// import { App, plugin } from '@inertiajs/inertia-vue3'

// const el = document.getElementById('app')

// createApp({
//     render: () => h(App, {
//         initialPage: JSON.parse(el.dataset.page),
//         resolveComponent: name => require(`./Pages/${name}`).default,
//     })
// }).use(plugin).mount(el)
import { createApp } from 'vue'
import selectComponent from './Pages/SelectComponent.vue'


createApp({
    components: { selectComponent }
}).mount('#app');
//Main pages



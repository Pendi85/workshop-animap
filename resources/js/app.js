import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler.js'
import Map from './components/map.vue'

const app = createApp({
    data() {
        return {
            showModal: false,
            message: 'Hello Vue!',
            animals: [
                {
                    name: "Ecureil de corée",
                    color: 'primary',
                    check: false
                },
                {
                    name: "Belette",
                    color: 'yellow-500',
                    check: false
                },
                {
                    name: "Cerf éphale",
                    color: 'red-700',
                    check: false
                },
                {
                    name: "Sanglier",
                    color: 'blue-700',
                    check: false
                },
                {
                    name: "Renard",
                    color: 'green-300',
                    check: false
                },
                {
                    name: "Chevreuil",
                    color: 'blue-200',
                    check: false
                },
                {
                    name: "Castor",
                    color: 'red-800',
                    check: false
                },
                {
                    name: "Blaireau",
                    color: 'yellow-800',
                    check: false
                },
                {
                    name: "Genette",
                    color: 'fuchsia-800',
                    check: false
                },
                {
                    name: "Canard mandarin",
                    color: 'rose-950',
                    check: false
                },
                {
                    name: "Ragondin",
                    color: 'pink-500',
                    check: false
                },
                {
                    name: "Ragondin",
                    color: 'teal-400',
                    check: false
                }
            ]
        };
    },
    methods: {
        changeModalState() {
            this.showModal = !this.showModal;
        }
    },
});

app.component('map-view', Map)

app.mount('#app')
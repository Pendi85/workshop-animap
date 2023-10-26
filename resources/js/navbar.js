import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler.js'

const app = createApp({
    data() {
        return {
            showModal: false
        };
    },
    methods: {
        changeModalState() {
            this.showModal = !this.showModal;
        },
    },
});

app.mount('#navbar')
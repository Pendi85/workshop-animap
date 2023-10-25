import './bootstrap';

import { createApp } from 'vue/dist/vue.esm-bundler.js'
import Map from './components/map.vue'

const app = createApp({
    mounted() {
        const currentURL = window.location.href;

        const url = new URL(currentURL);
        const animal_name = url.searchParams.get('animal');

        if (animal_name != null) {
            const animal_search = this.animals.find(animal => animal.name == animal_name);

            if (animal_search)
                animal_search.check = true;
        }
    },
    data() {
        return {
            showModal: false,
            selectAll: false,
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
                    color: 'red-500',
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
            ],
            cameras: [
                { name: "Camera 1", photos: 100, image: '/images/cameras/camera1.jpg' },
                { name: "Camera 2", photos: 600, image: '/images/cameras/camera2.jpg' }
            ]
        };
    },
    methods: {
        changeModalState() {
            this.showModal = !this.showModal;
        },
        selectAllAnimals() {
            this.selectAll = !this.selectAll;

            this.animals.forEach(animal => {
                animal.check = this.selectAll;
            });

        }
    },
});

app.component('map-view', Map)

app.mount('#app')
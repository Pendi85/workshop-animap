<template>
    <div v-if="load" style="height: 600px; width: 800px">
        <l-map ref="map" v-model:zoom="zoom" :center="[48.847759, 2.4394969]">
            <l-tile-layer url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png" layer-type="base"
                name="OpenStreetMap"></l-tile-layer>

            <l-marker v-for=" marker  in  filteredMarkers" :lat-lng="marker.coord" :key="marker.animal">
                <l-icon icon-url=" /images/animal.svg" :icon-size="[16, 16]"
                    :class-name="'rounded-full p-1 bg-' + marker.color"></l-icon>

                <l-popup>
                    <div>
                        <h2>{{ marker.animal }}</h2>
                        <p>Latitude: {{ marker.coord[0] }}</p>
                        <p>Longitude: {{ marker.coord[1] }}</p>
                    </div>
                </l-popup>
            </l-marker>
        </l-map>
    </div>
</template>
  
<script>
import "leaflet/dist/leaflet.css";
import { LMap, LTileLayer, LMarker, LIcon, LPopup } from "@vue-leaflet/vue-leaflet";

export default {
    components: {
        LMap,
        LTileLayer,
        LMarker,
        LIcon,
        LPopup
    },
    props: {
        animalList: {
            type: Array,
            required: true
        }
    },
    computed: {
        filteredMarkers() {
            return this.markers.filter((marker) => {
                return this.isAnimalChecked(marker.animal);
            });
        },
    },
    methods: {
        isAnimalChecked(animalName) {
            const animal = this.animalList.find((animal) => animal.name === animalName);

            return animal && animal.check;
        },
    },
    data() {
        return {
            zoom: 12,
            load: true,
            markers: [
                {
                    animal: "Sanglier",
                    coord: [48.857759, 2.4394969],
                    color: 'red-500'
                },
                {
                    animal: "Belette",
                    coord: [48.847759, 2.4394969],
                    color: 'yellow-500'
                }
            ]
        };
    },
};
</script>

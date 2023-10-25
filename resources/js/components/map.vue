<template>
    <div style="height: 600px; width: 800px">
        <l-map ref="map" v-model:zoom="zoom" :center="[48.847759, 2.4394969]">
            <l-tile-layer url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png" layer-type="base"
                name="OpenStreetMap"></l-tile-layer>

            <!-- Ajoutez un marqueur avec une icône personnalisée -->
            <l-marker :lat-lng="[48.847759, 2.4394969]">
                <l-icon icon-url="/images/animal.svg" :icon-size="[16, 16]"
                    class-name="p-1 bg-red-500 rounded-full"></l-icon>
            </l-marker>

            <l-marker :lat-lng="[48.857759, 2.4394969]">
                <l-icon icon-url="/images/animal.svg" :icon-size="[16, 16]"
                    class-name="p-1 bg-red-500 rounded-full"></l-icon>
            </l-marker>
        </l-map>
    </div>
</template>
  
<script>
import "leaflet/dist/leaflet.css";
import { LMap, LTileLayer, LMarker, LIcon } from "@vue-leaflet/vue-leaflet";

export default {
    components: {
        LMap,
        LTileLayer,
        LMarker,
        LIcon,
    },
    data() {
        return {
            zoom: 12,
        };
    },
};
</script>

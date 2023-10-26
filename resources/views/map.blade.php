<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body>
        @include('include.navbar')

        <div id="app" >
            <div class="w-full px-32 mt-12 flex flex-wrap">
                <div class="w-1/4 bg-white  drop-shadow-lg p-4">
                    <div class="flex flex-row justify-between mb-4 items-center">
                        <label class="text-2xl font-semibold">Animaux</label>
                        <button class="bg-gray-300 rounded p-1" v-on:click="selectAllAnimals">Tout selectionner</button>
                    </div>
                    <div class="overflow-y-auto h-64">
                        <div v-for="animal in animals" class="flex flex-row mt-2 space-x-2 justify-between	 items-center w-full p-2">
                            <div  :class="['bg-' + animal.color]" class="h-12 w-12 rounded-full flex items-center justify-center">
                                <img src="/images/animal.svg" alt="" height="30" width="30">
                            </div>
                            <h1 class="text-xl"> @{{animal.name}}</h1>
                            <input type="checkbox" v-model="animal.check" class="form-checkbox w-8 h-8 text-blue-500">
                        </div>
                    </div>

                    <div class="w-full mt-4">
                        <label class="text-2xl mt-12 font-semibold">Camera</label>
                        <div v-for="camera in cameras" class="flex flex-row mt-2 space-x-2 justify-between	 items-center w-full p-2">
                            <div class="flex flex-row space-x-4">
                                <img :src="camera.image" alt="" height="60" width="60">
                                <div class="flex flex-col justify-center">
                                    <h1 class="text-xl"> @{{camera.name}}</h1>
                                    <div class="flex flex-row items-center space-x-4">
                                        <img src="/images/camera.svg" alt="" height="20" width="20">
                                        <h1 class="text-xl"> @{{camera.photos}}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ml-4">
                    <map-view :animal-list="animals"></map-view>
                </div>
            </div>
        </div>
        @vite('resources/js/app.js')

    </body>
</html>
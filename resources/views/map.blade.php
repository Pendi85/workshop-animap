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
                    <label class="text-2xl font-semibold">Animaux</label>
                    <div class="overflow-y-auto h-64">
                        <div v-for="animal in animals" class="flex flex-row mt-2 space-x-2 justify-between	 items-center w-full p-2">
                            <div  :class="['bg-' + animal.color]" class="h-12 w-12 rounded-full flex items-center justify-center">
                                <img src="/images/animal.svg" alt="" height="30" width="30">
                            </div>
                            <h1 class="text-xl"> @{{animal.name}}</h1>
                            <input type="checkbox" class="form-checkbox w-8 h-8 text-blue-500">
                        </div>
                    </div>

                    <div class="w-full mt-4">
                        <label class="text-2xl mt-12 font-semibold">Camera</label>

                    </div>
                </div>
                <div class="ml-4">
                    <map-view></map-view>
                </div>
            </div>
        </div>
        @vite('resources/js/app.js')

    </body>
</html>
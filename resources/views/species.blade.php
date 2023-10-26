<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body>
        @include('include.navbar')

        <!-- Colonne 1 -->

        <div class="w-full px-32 mt-12 flex flex-wrap">
            <div class="flex flex-row w-full space-x-12 justify-center">
                <div class="w-1/5 bg-white p-2 drop-shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="/images/species/ecureuil.jpg" class="w-full h-52 p-4" alt="">
                        <label>Ecureil de corée</label>
                        <div class="flex flex-row items-center justify-center mt-4 space-x-2">
                            <button class="rounded-full font-montserrat px-4 py-1 bg-primary text-white">Description</button>
                            <div class="h-8 w-8 bg-primary rounded-full flex items-center justify-center">
                                <img src="/images/animal.svg" alt="">
                            </div>
                            <a href="/map?animal=Ecureil de corée"><img src="/images/map.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="w-1/5 bg-white p-2 drop-shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="/images/species/belette.jpg" class="w-full h-52 p-4" alt="">
                        <label>Belette</label>
                        <div class="flex flex-row items-center justify-center mt-4 space-x-2">
                            <button class="rounded-full font-montserrat px-4 py-1 bg-primary text-white">Description</button>
                            <div class="h-8 w-8 bg-yellow-500 rounded-full flex items-center justify-center">
                                <img src="/images/animal.svg" alt="">
                            </div>
                            <a href="/map?animal=Belette"><img src="/images/map.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="w-1/5 bg-white p-2 drop-shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="/images/species/cerf.jpg" class="w-full h-52 p-4" alt="">
                        <label>Cerf éphale</label>
                        <div class="flex flex-row items-center justify-center mt-4 space-x-2">
                            <button class="rounded-full font-montserrat px-4 py-1 bg-primary text-white">Description</button>
                            <div class="h-8 w-8 bg-red-500 rounded-full flex items-center justify-center">
                                <img src="/images/animal.svg" alt="">
                            </div>
                            <a href="/map?animal=Cerf éphale"><img src="/images/map.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="w-1/5 bg-white p-2 drop-shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="/images/species/sanglier.jpg" class="w-full h-52 p-4" alt="">
                        <label>Sanglier</label>
                        <div class="flex flex-row items-center justify-center mt-4 space-x-2">
                            <button class="rounded-full font-montserrat px-4 py-1 bg-primary text-white">Description</button>
                            <div class="h-8 w-8 bg-blue-700 rounded-full flex items-center justify-center">
                                <img src="/images/animal.svg" alt="">
                            </div>
                            <a href="/map?animal=Sanglier"><img src="/images/map.svg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colonne 2 -->
            <div class="flex flex-row w-full space-x-12 justify-center mt-8">
                <div class="w-1/5 bg-white p-2 drop-shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="/images/species/renard.jpg" class="w-full h-52 p-4" alt="">
                        <label>Renard</label>
                        <div class="flex flex-row items-center justify-center mt-4 space-x-2">
                            <button class="rounded-full font-montserrat px-4 py-1 bg-primary text-white">Description</button>
                            <div class="h-8 w-8 bg-green-300 rounded-full flex items-center justify-center">
                                <img src="/images/animal.svg" alt="">
                            </div>
                            <img src="/images/map.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-1/5 bg-white p-2 drop-shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="/images/species/chevreuil.jpg" class="w-full h-52 p-4" alt="">
                        <label>Chevreuil</label>
                        <div class="flex flex-row items-center justify-center mt-4 space-x-2">
                            <button class="rounded-full font-montserrat px-4 py-1 bg-primary text-white">Description</button>
                            <div class="h-8 w-8 bg-blue-200 rounded-full flex items-center justify-center">
                                <img src="/images/animal.svg" alt="">
                            </div>
                            <img src="/images/map.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-1/5 bg-white p-2 drop-shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="/images/species/castor.jpg" class="w-full h-52 p-4" alt="">
                        <label>Castor</label>
                        <div class="flex flex-row items-center justify-center mt-4 space-x-2">
                            <button class="rounded-full font-montserrat px-4 py-1 bg-primary text-white">Description</button>
                            <div class="h-8 w-8 bg-red-800 rounded-full flex items-center justify-center">
                                <img src="/images/animal.svg" alt="">
                            </div>
                            <img src="/images/map.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-1/5 bg-white p-2 drop-shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="/images/species/blaireau.jpg" class="w-full h-52 p-4" alt="">
                        <label>Blaireau</label>
                        <div class="flex flex-row items-center justify-center mt-4 space-x-2">
                            <button class="rounded-full font-montserrat px-4 py-1 bg-primary text-white">Description</button>
                            <div class="h-8 w-8 bg-yellow-800 rounded-full flex items-center justify-center">
                                <img src="/images/animal.svg" alt="">
                            </div>
                            <img src="/images/map.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>

            
            <!-- Colonne 3 -->
            <div class="flex flex-row w-full space-x-12 justify-center mt-8">
                <div class="w-1/5 bg-white p-2 drop-shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="/images/species/genette.jpg" class="w-full h-52 p-4" alt="">
                        <label>Genette</label>
                        <div class="flex flex-row items-center justify-center mt-4 space-x-2">
                            <button class="rounded-full font-montserrat px-4 py-1 bg-primary text-white">Description</button>
                            <div class="h-8 w-8 bg-fuchsia-800 rounded-full flex items-center justify-center">
                                <img src="/images/animal.svg" alt="">
                            </div>
                            <img src="/images/map.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-1/5 bg-white p-2 drop-shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="/images/species/canard.jpg" class="w-full h-52 p-4" alt="">
                        <label>Canard mandarin</label>
                        <div class="flex flex-row items-center justify-center mt-4 space-x-2">
                            <button class="rounded-full font-montserrat px-4 py-1 bg-primary text-white">Description</button>
                            <div class="h-8 w-8 bg-rose-950 rounded-full flex items-center justify-center">
                                <img src="/images/animal.svg" alt="">
                            </div>
                            <img src="/images/map.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-1/5 bg-white p-2 drop-shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="/images/species/ragondin.jpg" class="w-full h-52 p-4" alt="">
                        <label>Ragondin</label>
                        <div class="flex flex-row items-center justify-center mt-4 space-x-2">
                            <button class="rounded-full font-montserrat px-4 py-1 bg-primary text-white">Description</button>
                            <div class="h-8 w-8 bg-pink-500	 rounded-full flex items-center justify-center">
                                <img src="/images/animal.svg" alt="">
                            </div>
                            <img src="/images/map.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="w-1/5 bg-white p-2 drop-shadow-lg">
                    <div class="flex flex-col items-center">
                        <img src="/images/species/corbeau.jpg" class="w-full h-52 p-4" alt="">
                        <label>Corbeau</label>
                        <div class="flex flex-row items-center justify-center mt-4 space-x-2">
                            <button class="rounded-full font-montserrat px-4 py-1 bg-primary text-white">Description</button>
                            <div class="h-8 w-8 bg-teal-400 rounded-full flex items-center justify-center">
                                <img src="/images/animal.svg" alt="">
                            </div>
                            <img src="/images/map.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
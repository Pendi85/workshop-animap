<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <div class="w-full px-32 h-20 bg-white drop-shadow-lg" id="navbar">
    <div class="w-full h-20">
        <div class="h-full flex flex-row content-center items-center justify-around">

            <div class="relative flex items-center">
                <div class="flex flex-row items-center">
                    <img src="{{ asset('images/logo.png') }}" height="60" width="60" class="">
                    <span class="ml-4 text-xl font-montserrat italic font-bold hover:underline hover:cursor-pointer mb-1">Animap</span>
                </div>
                <span class="ml-4 text-normal font-montserrat hover:underline hover:cursor-pointer">Actualités</span>
                <a href="/actually"></a>
                <span class="ml-4 text-normal font-montserrat hover:underline hover:cursor-pointer">Espèces </span>
                <a href="/species"><span class="ml-4 text-normal font-montserrat hover:underline hover:cursor-pointer">Carte</span></a>
                <span class="ml-4 text-normal font-montserrat hover:underline hover:cursor-pointer">FAQ</span>
                <span class="ml-4 text-normal font-montserrat hover:underline hover:cursor-pointer">Camera</span>
            </div>
            <div class="flex flex-row items-center">
                <div class="flex space-x-2 ">
                    <button class="rounded-full font-montserrat px-4 py-1 bg-primary text-white ml-4">Connexion</button>
                    <button class="rounded-full font-montserrat px-4 py-1 bg-secondary text-white">
                        <a href="/login">Inscription</button>
                </div>
                <div class="rounded-full hidden bg-cover ml-6 border-4 hover:border-indigo-500/100  bg-center w-12 h-12 bg-avatar hover:cursor-pointer"  @mouseover="changeModalState">

                </div>
                <div class="w-64 h-40 hidden bg-white drop-shadow-md absolute right-8 top-24 rounded flex flex-col justify-center p-2" v-if="showModal">
                    <div class="w-full hover:bg-gray-100 text-center p-1 rounded cursor-pointer">
                        <label class="font-montserrat cursor-pointer">Mon Compte</label>
                    </div>
                    <a href="/list/create"><div class="w-full hover:bg-gray-100 text-center p-1 rounded cursor-pointer">
                        <label class="font-montserrat cursor-pointer">Mes liste</label>
                    </div></a>
                    <div class="w-full hover:bg-gray-100 text-center p-1 rounded cursor-pointer">
                        <label class="font-montserrat cursor-pointer">Mes suivis</label>
                    </div>
                    <div class="w-full hover:bg-red-100 text-center p-1 rounded cursor-pointer">
                        <label class="font-montserrat cursor-pointer">Déconnexion</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

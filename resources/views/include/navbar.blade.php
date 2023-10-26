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
                <a href="/"><div class="flex flex-row items-center">
                    <img src="{{ asset('images/logo.png') }}" height="60" width="60" class="">
                    <span class="ml-4 text-xl font-montserrat italic font-bold hover:underline hover:cursor-pointer ">Animap</span>
                </div></a>
                <a href="/actually"><span class="ml-4 text-normal font-montserrat hover:underline hover:cursor-pointer">Actualités</span></a>
                <a href="/species"><span class="ml-4 text-normal font-montserrat hover:underline hover:cursor-pointer">Espèces </span></a>
                <a href="/map"><span class="ml-4 text-normal font-montserrat hover:underline hover:cursor-pointer">Carte</span></a>
                <a href="/faq"><span class="ml-4 text-normal font-montserrat hover:underline hover:cursor-pointer">FAQ</span></a>
                <span class="ml-4 text-normal font-montserrat hover:underline hover:cursor-pointer">Camera</span>
            </div>
            <div class="flex flex-row items-center">
                @guest
                <div class="flex space-x-2 ">
                    <a href="/login"><button id="open-login-form" class="rounded-full font-montserrat px-4 py-1 bg-primary text-white ml-4">Connexion</button></a>
                    <a href="/register"><button id="open-registration-form" class="rounded-full font-montserrat px-4 py-1 bg-secondary text-white">Inscription</button></a>
                </div>
                @endguest

                @auth
                <div class="rounded-full bg-cover ml-6 border-4 hover:border-indigo-500/100  bg-center w-12 h-12 bg-avatar hover:cursor-pointer"  @mouseover="changeModalState">

                </div>
                @endauth

                <div class="w-64 h-12 bg-white drop-shadow-md absolute right-22 top-24 rounded flex flex-col justify-center p-2" v-if="showModal">
                    <div class="w-full hover:bg-red-100 text-center p-1 rounded cursor-pointer">
                        <a href="/logout"><label class="font-montserrat cursor-pointer">Déconnexion</label></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@vite('resources/js/navbar.js')
</body>
</html>

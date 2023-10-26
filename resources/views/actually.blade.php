<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'actualités</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('include.navbar')

    <div class="container mx-auto p-4">
        <article class="bg-white p-4 shadow-lg">
            <div class="md:flex">
                <div class="w-full md:w-1/2 p-2 flex items-center">
                    <img src="/images/cerf_home.jpg" alt="Image 2" class="w-3/5 h-auto rounded-lg">
                    <div class="pl-4">
                        <p class="text-lg font-semibold">Cerf population</p>
                        <p class="text-gray-600 md:text-left">
                            Une image captivante d'un majestueux cerf se tenant fièrement au cœur d'une luxuriante forêt d'Île-de-France. L'augmentation de la population de cerfs dans cette région se reflète dans cette scène, où la nature reprend possession de son territoire, offrant un havre de paix pour ces gracieuses créatures. Le cerf, symbole de la faune sauvage.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 p-2 flex items-center">
                    <img src="/images/ecureuil_home.jpg" alt="Image 2" class="w-2/4 h-auto rounded-lg">
                    <div class="pl-4">
                        <p class="text-lg font-semibold">Ecureuil de Corée</p>
                        <p class="text-gray-600 md:text-left">
                            Une charmante image mettant en lumière l'écureuil de Corée, une espèce d'une grande importance pour la biodiversité. Cette petite créature joue un rôle vital dans l'écosystème en contribuant à la dispersion des graines et au maintien de l'équilibre naturel. Son existence rappelle la richesse de la biodiversité, un trésor précieux de notre planète.
                        </p>
                    </div>
                </div>
            </div>
            <div class="mt-4 flex md:flex-row flex-col items-center">
                <img src="/images/lapins-couple_home.jpg" alt="Image 3" class="w-2/3 md:w-1/2 h-auto rounded-lg">
                <div class="pl-4 w-2/3 md:w-1/2">
                    <p class="text-lg font-semibold">Couple de lapin</p>
                    <p class="text-gray-600 text-center md:text-left">
                        Une scène adorable met en vedette un couple de lapins, partageant un doux moment de tendresse. Ces adorables créatures, au pelage doux et aux oreilles attentives, incarnent la chaleur et la complicité de la vie en harmonie avec la nature. Leur présence évoque la beauté de la faune et la douceur de la coexistence pacifique au sein de notre environnement. Ce couple de lapins symbolise l'harmonie et la tranquillité qui règnent dans leur coin de la nature.
                    </p>
                </div>
            </div>
        </article>
    </div>
</body>
</html>

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
        <div class="flex items-center">
            <img src="/images/faq.svg" alt="Image 2" class="w-8 h-8 rounded-full">
            <h1 class="font-bold ml-2">Foire aux questions</h1>
        </div>
        <div class="md:flex">
            <div class="w-full md:w-1/2 p-2 flex items-center">
                <div class="pl-4">
                    <p class="text-lg font-semibold">Qui sommes nous?</p>
                    <p class="text-gray-600 md:text-left">
                        Animap est une entreprise au service des associations et des mairies depuis 2023.
                        Nos dispositifs permettent de sensibiler la populations sur les espèces animales qui
                        les entourent.
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/2 p-2 flex items-center">
                <div class="pl-4">
                    <p class="text-lg font-semibold">Les dispositifs ne dérangent-ils pas les animaux ?</p>
                    <p class="text-gray-600 md:text-left">
                        Les caméras mise en place sont installées par des experts animalier afin de ne pas
                        déranger les animaux aucun flash ou nuisance sonore ne sont utilisés.
                    </p>
                </div>
            </div>
        </div>
        <div class="mt-4 flex md:flex-row flex-col items-center">
            <div class="pl-4 w-2/3 md:w-1/2">
                <p class="text-lg font-semibold">Si je collabore avec Animap devrais-je entretenir le matériel ?</p>
                <p class="text-gray-600 text-center md:text-left">
                    Non, des entretiens régulier sont convenus avec vous et ce sont nos équipes qui se
                    chargent d’entretenir le matériel. Si vous constatez un problème avec vos equipements
                    n’hésitez pas à nous contacter.
                </p>
            </div>
        </div>
        <div class="mt-4 flex md:flex-row flex-col items-center">
            <div class="pl-4 w-2/3 md:w-1/2">
                <p class="text-lg font-semibold">Comment sont traités les données des caméras ?</p>
                <p class="text-gray-600 text-center md:text-left">
                    Les données sont traitées localement afin d’éviter de trop gros transfert de données.
                    Vous aurez accès au données traitées et vous pourrez les utiliser librement. Nous utilisons
                    une partie de ces données pour promouvoir votre ville / régions sur notre site.                </p>
            </div>
        </div>
    </article>
</div>
</body>
</html>

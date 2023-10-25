<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @include('include.navbar')
    <br>
    <h1>Actualités</h1>
    <br>
    <div class="flex flex-row items-center">
        <img src="{{ asset('images/ecureuil-coree.jpg') }}" height="300" width="300" class="">
        <span class="ml-3 text-xl font-montserrat font-normal mb-1">
            Un écureuil de Corée a été observé en train de prendre un bon repas</span>
    </div>
    <br>
    <div class="flex flex-row items-center">
        <img src="{{ asset('images/lapins-couple-184346.jpg') }}" height="300" width="300" class="">
        <span class="ml-3 text-xl font-montserrat font-normal mb-1">
            Deux Lapins de Garenne se retrouvant après une ballade</span>
    </div>
    <br>
    <div class="flex flex-row items-center">
        <img src="{{ asset('images/Cervus_elaphus_Luc_Viatour_6.jpg') }}" height="300" width="300" class="">
        <span class="ml-3 text-xl font-montserrat font-normal mb-1">
            La population de Cerfs élaphes en France s'agrandit d'année en année avec une population
            de 40 000 en 1983 à 200 000 en 2023</span>
    </div>
</body>
</html>

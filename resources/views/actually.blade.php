<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Document</title>
    <style>
        .flex {
            display: flex;
        }

        .image-container {
            margin-right: 20px;
        }
        .text-container {
            border: 1px solid #ccc;
            padding: 10px;
        }
    </style>
</head>
<body>
@include('include.navbar')
<br>
<h1 class="font-bold ml-2">Actualités</h1>
<br>
<div class="flex flex-column ml-4">
    <div class="image-container">
        <img src="{{ asset('images/ecureuil-coree.jpg') }}" height="300" width="300">
    </div>
    <div class="text-container">
        <span class="ml-0 text font-montserrat font-normal mb-1">
            <p>Un écureuil de Corée a été observé <br> en train de prendre un bon repas</p>
        </span>
    </div>
    <br><br>
    <div class="image-container">
        <img src="{{ asset('images/Cervus_elaphus_Luc_Viatour_6.jpg') }}" height="300" width="300">
    </div>
    <div class="text-container">
        <span class="ml-0 text font-montserrat font-normal mb-1">
            <p>La population de Cerfs élaphes en France s'agrandit <br>
                d'année en année avec une population de <br> 40 000 en 1983 à 200 000 en 2023</p>
        </span>
    </div>
</div>
<br>
<div class="flex flex-column ml-4">
    <div class="image-container ml-4">
        <img src="{{ asset('images/lapins-couple-184346.jpg') }}" height="300" width="300"> <br>
        <div class="text-container">
            <span class="ml-0 text font-montserrat font-normal mb-1">
                <p>Deux Lapins de Garenne se retrouvant après une balade</p>
            </span>
        </div>
    </div>
</div>
</body>
</html>

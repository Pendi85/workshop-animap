<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  @include('include.navbar')
  <div class="w-full px-32 mt-12 flex flex-wrap">
    @if (isset($detector))
      @if ($detector->animal != "")
        <p>Animal Détecté : {{$detector->animal}}</p>
        <p>Probabilité : {{$detector->probability}}</p>
      @endif
      @if ($detector->message != "")
        <p>Erreur lors de l'exécution de la requête sur l'API d'identification d'animaux : {{$detector->message}}</p>
      @endif
    @endif
    <a class="btn" href="/identifyAnimal">Exécuter Test</a>
  </div>
</body>
</html>
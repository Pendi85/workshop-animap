<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body>
        @include('include.navbar')

        <div class="w-full px-32 mt-4">
            <form method="POST" action="/camera/add"  enctype="multipart/form-data">
                @csrf
                <input type="file" name="image" accept="image/*">
                <button type="submit">Ajouter une image</button>
            </form>

            <div class="flex flex-wrap w-full justify-center">
                @foreach ($animals as $animal)
                <div class="bg-white drop-shadow-lg p-4 m-4">
                    <div class="flex flex-col items-center">
                        <img src={{$animal->url}} class="w-64 h-52" alt="">
                        <label>{{$animal->animal}}</label>
                        <label>Proba : {{$animal->probability}}</label>
                        <div class="flex flex-row items-center justify-center mt-4 space-x-2">
                            <button class="rounded-full font-montserrat px-4 py-1 bg-primary text-white">Description</button>
                            <div class="h-8 w-8 bg-primary rounded-full flex items-center justify-center">
                                <img src="/images/animal.svg" alt="">
                            </div>
                            <a href="/map?animal=Ecureil de corée"><img src="/images/map.svg" alt=""></a>
                        </div>
                    </div>
                </div>   
                @endforeach                 
            </div>
        </div>
    </body>
</html>
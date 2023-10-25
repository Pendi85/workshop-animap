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
            <div class="w-1/3 bg-white  drop-shadow-lg h-64 p-4">

            </div>
            <div id="app" class="ml-4">

            </div>
        </div>
        @vite('resources/js/app.js')

    </body>
</html>
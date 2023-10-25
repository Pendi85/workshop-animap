<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
    </head>
    <body>
        @include('include.navbar')

        <div class="container">
            <div class="flex justify-center items-center h-screen">
                <div class="w-full max-w-md">
                    <div class="bg-white p-8 rounded-lg shadow-lg">
                        <h1 class="text-2xl font-semibold mb-4">{{ __('Inscription') }}</h1>
                        <form method="POST" action="">
                            @csrf
        
                            <div class="mb-4">
                                <label for="name" class="block text-gray-600 text-sm font-medium">Nom</label>
                                <input
                                    id="name"
                                    type="text"
                                    name="name"
                                    value="{{ old('name') }}"
                                    required
                                    class="form-input w-full"
                                />
                            </div>
        
                            <div class="mb-4">
                                <label for="prenom" class="block text-gray-600 text-sm font-medium">Prénom</label>
                                <input
                                    id="prenom"
                                    type="text"
                                    name="prenom"
                                    value="{{ old('prenom') }}"
                                    required
                                    class="form-input w-full"
                                />
                            </div>
        
                            <div class="mb-4">
                                <label for="email" class="block text-gray-600 text-sm font-medium">Email</label>
                                <input
                                    id="email"
                                    type="email"
                                    name="email"
                                    value="{{ old('email') }}"
                                    required
                                    autocomplete="email"
                                    class="form-input w-full"
                                />
                            </div>
        
                            <div class="mb-4">
                                <label for="password" class="block text-gray-600 text-sm font-medium">Mot de passe</label>
                                <input
                                    id="password"
                                    type="password"
                                    name="password"
                                    required
                                    autocomplete="new-password"
                                    class="form-input w-full"
                                />
                            </div>
        
                            <div class="mb-6">
                                <label for="password_confirmation" class="block text-gray-600 text-sm font-medium">Confirmer le mot passe</label>
                                <input
                                    id="password_confirmation"
                                    type="password"
                                    name="password_confirmation"
                                    required
                                    class="form-input w-full"
                                />
                            </div>
        
                            <div class="flex items-center justify-center">
                                <button type="submit" class="bg-secondary text-white px-4 py-2 rounded hover:bg-blue-700">
                                    Inscription
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
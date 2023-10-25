<div class="container">
    <div class="flex justify-center items-center h-screen">
        <div class="w-full max-w-md">
            <div class="bg-white p-8 rounded-lg shadow-lg">
                <h1 class="text-2xl font-semibold mb-4">{{ __('Connexion') }}</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="mb-4">
                        <label for="email" class="block text-gray-600 text-sm font-medium">Email</label>
                        <input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            autocomplete="email"
                            autofocus
                            class="form-input w-full"
                        />
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-gray-600 text-sm font-medium">Mot de passe</label>
                        <input
                            id="password"
                            type="password"
                            name="password"
                            required
                            autocomplete="current-password"
                            class="form-input w-full"
                        />
                    </div>

                    <div class="mb-6">
                        <input
                            type="checkbox"
                            name="remember"
                            id="remember"
                            {{ old('remember') ? 'checked' : '' }}
                            class="mr-1"
                        />
                        <label for="remember" class="text-gray-600 text-sm">Se souvenir de moi</label>
                    </div>

                    <div class="flex items-center justify-center">
                        <button type="submit" class="bg-primary text-white px-4 py-2 rounded hover:bg-blue-700">
                            Connexion
                        </button>

                        @if (Route::has('password.request'))
                            <a class="text-blue-600 hover:underline hover:text-blue-800 ml-4" href="{{ route('password.request') }}">
                                Mot de passe oublié ?
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

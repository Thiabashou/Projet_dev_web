{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
 --}}


 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProjetDON</title>
    <style>

body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
}

.First {
    background-color: #fff;
    border-radius: 18px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 100px;
    max-width: 100px;
    width: 100%;
}

header {
    background-color: #fdfdfd;
    color: #000000;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

main {
            flex: 1; /* Utilise tout l'espace disponible */
            padding: 200px;
            height: 100%;
        }

footer {
            background-color: #333333;
            color: #ffffff;
            padding: 20px;
            text-align: center;
            text-align: center;
            margin-top: auto;
        }


nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
}

nav ul li {
    margin-right: 20px;
}

nav ul li:last-child {
    margin-right: 0;
}

nav ul li a {
    color: #000000;
    text-decoration: none;
    font-size: 16px;
}

nav ul li a:hover {
    text-decoration: underline;
}


h2 {
    text-align: center;
}

.input-group {
    margin-bottom: 20px;
}

.input-group label {
    display: block;
    font-size: 16px;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.btn {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.8s;
}

.btn:hover {
    background-color: #0056b3;
}

    </style>
 </head>
 <body>
    <header>
        <h1>LifeSaver</h1>
    <nav>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Find Blood</a></li>

        </li>
        </ul>
    </nav>
    
</header>
    <main class="fond">
    <form action="POST" class="First">
        <h2>Connexion</h2>
        <label for="Prenom">Email</label><br>
        <input type="text"><br><br>
        <label for="Password">Mot de passe</label><br>
        <input type="password"><br><br>
        <button class="btn">Se connecter</button>
    </form>
</main>
<footer>
    <p>&copy; 2024 Votre Entreprise. Tous droits réservés.</p>
</footer>
 </body>
 </html>
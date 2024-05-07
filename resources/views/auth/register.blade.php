{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}









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
        <h2>Inscription</h2>
        <label for="usrname">Nom d'utilisateur :</label><br>
        <input type="text" id="username" name="username"><br><br>
        
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password"><br><br>
        
        <label for="date">Date de Naissance :</label><br>
        <input type="date" id="DDN" name="DDN"><br><br>

        <label for="mail">E-mail :</label><br>
        <input type="email" id="email" name="email"><br>
        <br>
        <div>
            <label for="blood_group">Groupe sanguin :</label><br>
            <select id="blood_group" name="blood_group">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
        </div><br><br>
        
        <button class="btn">S'inscrire</button>
    </form>          

</main>
<footer>
    <p>&copy; 2024 Votre Entreprise. Tous droits réservés.</p>
</footer>

</body>
</html>

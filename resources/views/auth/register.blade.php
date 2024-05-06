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
   font-family: Arial, sans-serif;
   background-color: #f7f7f7;
   margin: 0;
   padding: 0;
   display: flex;
   justify-content: center;
   align-items: center;
   height: 100vh;
}

.First {
   background-color: #fff;
   border-radius: 18px;
   box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
   padding: 40px;
   max-width: 300px;
   width: 100%;
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

    <form action="POST" class="First">
        <h2>Inscription</h2>
        <label for="usrname">Nom d'utilisateur :</label><br>
        <input type="text" id="username" name="username"><br><br>
        
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password"><br><br>
        
        <label for="date">Date de Naissance :</label><br>
        <input type="date" id="DDN" name="DDN"><br><br>

        <label for="mail">Addresse E-mail :</label><br>
        <input type="email" id="email" name="email"><br><br>
        
        
        <label for="groupeSanguin">Groupe Sanguin :</label><br>
        <input type="text" id="groupeSanguin" name="groupeSanguin"><br><br>
        
        <button class="btn">S'inscrire</button>
    </form>
    
</body>
</html>

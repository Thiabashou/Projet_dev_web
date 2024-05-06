<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        


        <!-- Styles -->
<style>

body {
    margin: 0;
    padding: 0;
    font-family: Arial, sans-serif;
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
            padding: 500px;
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
                        <li> @if (Route::has('login'))
                            <div class="">
                                @auth
                                    <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                                @else
                                    <a href="{{ route('login') }}" class="">Log in</a>
            
                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="">Register</a>
                                    @endif
                                @endauth
                            </div>
                        @endif
                    </li>
                    </ul>
                </nav>
                
            </header>
            <main style="background-image: url('{{ asset('images/background.png') }}');">
               

            </main>
            <footer>
                <p>&copy; 2024 Votre Entreprise. Tous droits réservés.</p>
            </footer>
          
        </div>
    </body>
</html>

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
            padding: 250px;
            height: 100%;
            background-image: url('{{ asset('C:\laragon\www\ProjetDON\public\images\background.png') }}')
      
            background-size: conten;
            background-repeat: no-repeat;
        }

footer {
            background-color: #1E2833;
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


button {
    background-color: #000000;
    color: white;
    border-radius: 15px;
    padding: 10px;
    width: 18%;
    height: 15%;

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
            <main>
                <div align="right" class="blood">
                    <h1>Save life Donate Blood</h1>
                    <p>Explorez notre site pour en apprendre davantage sur le processus de don, où donner, et comment vous pouvez aider à sauver des vies dès aujourd'hui. Rejoignez-nous dans cette noble cause et ensemble, faisons du Sénégal un endroit où personne ne manque de sang quand il en a besoin.</p>
                    <br>
                    <br>
                    <br>
                    <button><h4>Get Blood Now</h4></button>
                 </div>
                
            
            x
            

            </main>
            <footer>
                <img src="{{URL('images/foot.png')}}" alt="">
                <p>
                    <div align="left" >
                        Suscribe to our <br>newsletter
                        <p align="center">Services</p>
                        
                    </div>

                </p>
                <p>Email address</p><br>
            </footer>
          
        </div>
    </body>
</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
         <link rel="stylesheet" href="../resources/sass/style.css" media="screen" type="text/css" />

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            #container{
                width:330px;
                margin:0 auto;
                margin-top:0%;
            }
            form {
                width:100%;
                padding: 40px;
                border: 2px solid #f1f1f1;
                background: #fff;
                box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            }
            input[type=text], input[type=password] {
                width: 60%;
                padding: 10px 14px;
                margin: 10px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            input[type=submit] {
                background-color: #d7002f;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }
            input[type=submit]:hover {
                background-color: white;
                color: #d7002f;
                border: 1px solid #d7002f;
              }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel Test inscription
                </div>


            <div id="container">
                <form action="/inscription" method="POST">
                  {{ csrf_field() }}



         <input type="text" placeholder="Entrer votre nom " name="nom" required>

         <input type="text" placeholder="Entrer votre prénom " name="prenom" required>

         <input type="text" placeholder="Entrer votre fonction " name="fonction" >

         <input type="text" placeholder="Entrer l'adresse " name="adresse" required>

         <input type="text" placeholder="Entrer le numéro " name="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" title="format:xxx-xxx-xxxx" required>

         <input type="text" placeholder="Entrer votre email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>

         <input type="password" placeholder="Entrer le mot de passe" name="mdp" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="doit contenir au moins une majuscule,un nombre et 8 caractères " required>
         <input type="submit" id='submit' value='inscription'  >

     </form>
   </div>
                </div>
            </div>
        </div>
    </body>
</html>

<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #111213;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
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
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Fibonacci Lineal
                </div>
                

                <div class="links">
                    <a href="http://127.0.0.1:8000/Fibonacci_Lineal">Fibonacci Lineal</a>
                    <a href="http://127.0.0.1:8000/Fibonacci_Recursivo">Fibonacci Recursivo</a>
                    <a href="http://127.0.0.1:8000/Fibonacci_ProgDinamica">Fibonacci ProgDinamica</a>
                </div>
                <hr>


<?php
$tiempo_inicio = microtime(true);

    $cantidad_nfibonacci=60;

    echo 'cantidad de numeros fibonacci: '.$cantidad_nfibonacci;
    echo '<hr>';

    $a = 0; $b = 1; $c=0;
   
    $identificador=1;

    for($i=0; $i<$cantidad_nfibonacci; $i++){

        $c = $a + $b;
        $a = $b;
        $b = $c;

        //debe pintar $a    
        echo 'Fibo ('.$identificador.') = '.$a.' / '; 
        $identificador++;
        //echo '<hr>';       

    }

    $tiempo_fin = microtime(true);
    echo '<hr>';
    echo '<a>Tiempo empleado: ' . ($tiempo_fin - $tiempo_inicio).' seg <a>';

?>

            </div>
        </div>
    </body>
</html>
